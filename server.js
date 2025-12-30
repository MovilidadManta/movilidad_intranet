const express = require("express");
const app = express();
const fs = require("fs");
const https = require("https");
const { Client } = require("pg");
const POLLING_INTERVAL = 4000;

// Producción
const connectionData = {
    user: "postgres",
    host: "192.168.1.226",
    database: "db_sgi",
    password: "MovilidadBD/*.",
    port: 5432,
};

// Desarrollo
/*
const connectionData = {
    user: "postgres",
    host: "164.92.149.114",
    database: "db_sgi_d",
    password: "admin",
    port: 5432,
};
*/

// Certificados para HTTPS
const sslOptions = {
    key: fs.readFileSync("/etc/ssl/private.key"), // Ruta a tu clave privada
    cert: fs.readFileSync("/etc/ssl/certificate.crt"), // Ruta a tu certificado
};

// Configuración del servidor HTTPS
const httpsServer = https.createServer(sslOptions, app);

const io = require("socket.io")(httpsServer, {
    cors: { origin: "*" },
});

let users = {};
let user_online = [];
let pollingTimer;

io.on("connection", onConnected);

function onConnected(socket) {
    socket.on("new user", (data, cb) => {
        if (data.cedula in users) {
            cb(false);
        } else {
            cb(true);
            socket.nickcedula = data.cedula;
            socket.nickname = data.nombre;
            users[socket.nickcedula] = socket;
            updateNicknames();
        }
    });

    socket.on("load old msgs", (data, cb) => {
        GET_message(data.user, data.user_to)
            .then((result) => {
                if (result != "") {
                    cb(result);
                }
            })
            .catch((error) => console.log(error.stack));
    });

    socket.on("disconnect", () => {
        if (!socket.nickcedula) return;
        delete users[socket.nickcedula];
        const index = buscar_usuario(socket.nickcedula);
        if (index !== -1) {
            user_online.splice(index, 1);
        }
        updateusers();
    });

    function updateusers() {
        io.sockets.emit("usernames", user_online);
    }

    function updateNicknames() {
        if (user_online.findIndex((u) => u.cedula === socket.nickcedula) === -1) {
            user_online.push({
                cedula: socket.nickcedula,
                nombres: socket.nickname,
            });
        }
        io.sockets.emit("usernames", user_online);
    }

    socket.on("user notificacion", async (data) => {
        notificaciones(data);
    });

    socket.on("send message", async (data, cb) => {
        const { mensaje, user_to, user, date } = data;
        InsertMenssage(user, user_to, mensaje, date).then((result) => {
            if (result) {
                const nombre = user_online.find((u) => u.cedula === user)?.nombres || "";
                users[user_to]?.emit("whisper", { msg: mensaje, cedula: user, nombre });
            }
        });
    });

    socket.on("send message file", async (data, cb) => {
        const { mensaje, user_to, user, date, filebase64, f_name, f_tipo } = data;
        InsertMenssageFile(user, user_to, mensaje, date, filebase64, f_name, f_tipo).then((result) => {
            if (result.res) {
                cb(result.id_file);
                users[user_to]?.emit("whisper file", {
                    f_na: f_name,
                    file: filebase64,
                    id_: result.id_file,
                    cedula: user,
                });
            }
        });
    });

    socket.on("message", (data) => {
        socket.broadcast.emit("chat-message", data);
    });

    socket.on("feedback", (data) => {
        socket.broadcast.emit("feedback", data);
    });

    const notificaciones = async (cedula) => {
        const client = new Client(connectionData);
        const query = `
            SELECT m.no_id, m.user_to, m.user_send, 
                   CONCAT(e.emp_nombre, ' ', e.emp_apellido) AS usuario, 
                   m.contenido, m.asunto, m.hora_envio, m.hora_lectura, m.estado, m.tipo_notificaciones 
            FROM tbl_mensajes m 
            INNER JOIN tbl_empleados e ON e.emp_cedula = m.user_send
            WHERE user_to = $1 AND estado = 0`;
        await client.connect();
        try {
            const { rows } = await client.query(query, [cedula]);
            updateSockets({ cata: rows, cedula });
        } catch (error) {
            console.error(error.stack);
        } finally {
            await client.end();
            if (user_online.length) {
                pollingTimer = setTimeout(() => notificaciones(cedula), POLLING_INTERVAL);
            }
        }
    };

    const updateSockets = (data) => {
        users[data.cedula]?.emit("whisper noti", data.cata);
    };
}

httpsServer.listen(3000, () => {
    console.log("HTTPS Server is running on port 3000");
});

function buscar_usuario(data) {
    return user_online.findIndex((u) => u.cedula === data);
}

const GET_message = async (user, userTo) => {
    const client = new Client(connectionData);
    const query = `
        SELECT men_id, men_user, men_userto, men_message, me_fecha, me_fname, me_ftipo 
        FROM tbl_intra_mensaje 
        WHERE men_user = $1 AND men_userto = $2
        UNION
        SELECT men_id, men_user, men_userto, men_message, me_fecha, me_fname, me_ftipo 
        FROM tbl_intra_mensaje 
        WHERE men_user = $2 AND men_userto = $1
        ORDER BY me_fecha ASC`;
    await client.connect();
    try {
        const { rows } = await client.query(query, [user, userTo]);
        return rows;
    } catch (error) {
        console.error(error.stack);
        return "";
    } finally {
        await client.end();
    }
};

const InsertMenssage = async (user, userTo, mensaje, fecha) => {
    const client = new Client(connectionData);
    await client.connect();
    try {
        await client.query(
            `INSERT INTO "tbl_intra_mensaje" ("men_user", "men_userto", "men_message", "me_fecha") 
             VALUES ($1, $2, $3, now())`,
            [user, userTo, mensaje]
        );
        return true;
    } catch (error) {
        console.error(error.stack);
        return false;
    } finally {
        await client.end();
    }
};

const InsertMenssageFile = async (user, userTo, mensaje, fecha, file, f_name, f_tipo) => {
    const client = new Client(connectionData);
    await client.connect();
    try {
        const { rows } = await client.query(
            `INSERT INTO "tbl_intra_mensaje" ("men_user", "men_userto", "men_message", "me_fecha", "me_file", "me_fname", "me_ftipo") 
             VALUES ($1, $2, $3, now(), $4, $5, $6) RETURNING men_id`,
            [user, userTo, mensaje, file, f_name, f_tipo]
        );
        return { res: true, id_file: rows[0].men_id };
    } catch (error) {
        console.error(error.stack);
        return { res: false };
    } finally {
        await client.end();
    }
};