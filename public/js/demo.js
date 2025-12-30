let socket;
let chat_opens = [];
let fileURL;
let file_name;
let file_type;
let file_size;

$(window).on("load", function () {
    "use strict";
    // GET_mensajes();
    setTimeout(function () {
        $("#cont_preload").hide();
        $("#cont_calendar").show();
    }, 1200);
});

$(function () {
    let ip_address = "movilidadmanta.gob.ec"; // PRODUCCION
    //let ip_address = 'localhost';
    //let ip_address = '192.168.1.222';
    // let ip_address = "192.168.0.105"; // DESARROLLO
    let socket_port = "3000";
    socket = io(ip_address + ":" + socket_port);

    let cedula = $("#id_user_").val();
    let nombre = $("#name_").val();

    let dat = {
        cedula,
        nombre,
    };
    socket.emit("user notificacion", cedula, (res) => { });
    socket.on("whisper noti", (res) => {
        console.log(res);
        let html = "";
        let ced_aux;
        if (res.length > 0) {
            $(res).each(function (i, data) {
                ced_aux = data.user_to;
                if (data.user_to == cedula) {
                    html +=
                        ' <div class="list-group-item"><div class="row align-items-center"><div class="col-auto"><span class="status-dot status-dot-animated bg-green d-block"></span></div>';
                    html +=
                        '<div class="col text-truncate"><a href="#" onclick="open_notificacion(' +
                        data.no_id +
                        ')" class="text-body d-block">Tienes un mensaje nuevo de ' +
                        data.usuario +
                        "</a>";
                    html +=
                        '<div class="d-block text-secondary text-truncate mt-n1">';
                    if (data.tipo_notificaciones == 1) {
                        html +=
                            '<i class="fa-solid fa-cake-candles rosa_"></i> <span>';
                    } else {
                        html +=
                            '<i class="fa-solid fa-envelope verde_n"></i> <span>';
                    }
                    html +=
                        data.asunto +
                        '</span></div></div><div class="col-auto">';
                    html +=
                        '<a href="#" class="list-group-item-actions"><svg xmlns="http://www.w3.org/2000/svg" class="icon text-muted" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none" /><path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" /></svg></a></div></div></div>';
                }
            });

            $("#con_mensajes").html(html);
            if (ced_aux == cedula) {
                let ss =
                    '<svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M10 5a2 2 0 1 1 4 0a7 7 0 0 1 4 6v3a4 4 0 0 0 2 3h-16a4 4 0 0 0 2 -3v-3a7 7 0 0 1 4 -6"></path><path d="M9 17v1a3 3 0 0 0 6 0v-1"></path></svg><span class="position-absolute start-100 translate-middle badge rounded-pill bg-info">' +
                    res.length +
                    '<span class="visually-hidden">unread messages</span></span>';
                $("#tab_ale").html(ss);
                $("#tab_ale").addClass("animate__wobble animate__repeat-3");
            }
        } else {
            $("#tab_ale").html(
                '<svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M10 5a2 2 0 1 1 4 0a7 7 0 0 1 4 6v3a4 4 0 0 0 2 3h-16a4 4 0 0 0 2 -3v-3a7 7 0 0 1 4 -6"></path><path d="M9 17v1a3 3 0 0 0 6 0v-1"></path></svg>'
            );
            $("#con_mensajes").html("");
        }
    });
    socket.emit("new user", dat, (data) => { });
    socket.on("whisper", (data) => {
        open_chat_(parseInt(data.cedula), data.nombre);
        if (cedula == data.cedula) {
            $("#content_chat_" + data.cedula)
                .append(`<div class="d-flex flex-row justify-content-end">
                        <div><p class="small p-2 me-3 mb-1 text-white rounded-3 bg-primary">${data.msg}</p>
                        </div><img src="http://movilidadmanta.gob.ec/imagenes_empleados/${data.cedula}.jpeg" alt="avatar 1" class="user_img_chat">`);
        } else {
            $("#content_chat_" + data.cedula)
                .append(`<div class="d-flex flex-row justify-content-start mb-4">
                        <img src="http://movilidadmanta.gob.ec/imagenes_empleados/${data.cedula}.jpeg" alt="avatar 2" class="user_img_chat">
                        <div>
                            <p class="small p-2 ms-3 mb-1 rounded-3" style="background-color: #f5f6f7;">${data.msg}</p>
                        </div>
                    </div>`);
        }
        scrollToBottom(cedula);
    });

    socket.on("whisper file", (data) => {
        //console.log("Datos : " + data);
        open_chat_(parseInt(data.cedula));
        if (cedula == data.cedula) {
            $("#content_chat_" + data.cedula)
                .append(`<div class="d-flex flex-row justify-content-end">
                        <div><p class="small p-2 me-3 mb-1 text-white rounded-3 bg-primary">${data.f_na}</p>
                        </div><img src="http://movilidadmanta.gob.ec/imagenes_empleados/${data.cedula}.jpeg" alt="avatar 1" class="user_img_chat">`);
        } else {
            $("#content_chat_" + data.cedula)
                .append(`<div class="d-flex flex-row justify-content-start mb-4">
                            <img src="http://movilidadmanta.gob.ec/imagenes_empleados/${data.cedula}.jpeg" alt="avatar 2" class="user_img_chat">
                            <div>
                                <div class="flex small p-2 ms-3 mb-1 rounded-3 c_chat car_file_e" style="background-color: #f5f6f7;">
                                    <span>${data.f_na}</span>
                                    <span class="flex alg_center">
                                        <a class="icon_descarga" href="javascript:void(0)" onclick="descargar_archivo(${data.id_})">
                                            <i class="fa-solid fa-circle-down"></i>
                                        </a>
                                    </span>
                                </div>
                            </div>
                        </div>`);
        }
        scrollToBottom(cedula);
    });
    socket.on("usernames", (data) => {
        let html = "";
        for (let i = 0; i < data.length; i++) {
            if (cedula != data[i].cedula) {
                let imageUrl = `http://movilidadmanta.gob.ec/imagenes_empleados/${data[i].cedula}.jpeg`;
                let defaultImageUrl = `http://movilidadmanta.gob.ec/imagenes_empleados/default.png`;

                html += `
                <div class="col-md-12">
                    <div class="row g-3 align-items-center">
                        <a href="#" class="col-auto">
                        <span class="avatar">
                            <img src="${imageUrl}" data-cedula="${data[i].cedula}.jpeg" onerror="this.onerror=null;this.src='${defaultImageUrl}';" class="avatar">
                            <span class="badge bg-green badge-notification badge-blink"></span>
                        </span>
                        </a>
                        <div class="col text-truncate">
                            <a href="#" onclick="open_chat(${data[i].cedula},'${data[i].nombres}')" class="text-reset d-block text-truncate">${data[i].nombres}</a>
                            <div class="text-muted text-truncate mt-n1">En linea</div>
                        </div>
                    </div>
                </div>
                `;
            }
        }
        $("#user_connetion").html(html);
    });
    socket.on("clients-total", (data) => {
        $("#user_connetion").html(`Usuarios conectados: ${data}`);
    });
});

/*refreshUbi = setInterval(function () {
    //GET_mensajes();
}, 50000);*/

function GET_mensajes() {
    $.ajax({
        url: "/get_mensaje",
        type: "GET",
        dataType: "json",
        success: function (res) {
            console.log(res);
            let html = "";
            if (res.length > 0) {
                $(res).each(function (i, data) {
                    html +=
                        ' <div class="list-group-item"><div class="row align-items-center"><div class="col-auto"><span class="status-dot status-dot-animated bg-green d-block"></span></div>';
                    html +=
                        '<div class="col text-truncate"><a href="#" onclick="open_notificacion(' +
                        data.no_id +
                        ')" class="text-body d-block">Tienes un mensaje nuevo de ' +
                        data.usuario +
                        "</a>";
                    html +=
                        '<div class="d-block text-secondary text-truncate mt-n1">';
                    if (data.tipo_notificaciones == 1) {
                        html +=
                            '<i class="fa-solid fa-cake-candles rosa_"></i> <span>';
                    } else {
                        html +=
                            '<i class="fa-solid fa-envelope verde_n"></i> <span>';
                    }
                    html +=
                        data.asunto +
                        '</span></div></div><div class="col-auto">';
                    html +=
                        '<a href="#" class="list-group-item-actions"><svg xmlns="http://www.w3.org/2000/svg" class="icon text-muted" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none" /><path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" /></svg></a></div></div></div>';
                });

                $("#con_mensajes").html(html);
                let ss =
                    '<svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M10 5a2 2 0 1 1 4 0a7 7 0 0 1 4 6v3a4 4 0 0 0 2 3h-16a4 4 0 0 0 2 -3v-3a7 7 0 0 1 4 -6"></path><path d="M9 17v1a3 3 0 0 0 6 0v-1"></path></svg><span class="position-absolute start-100 translate-middle badge rounded-pill bg-info">' +
                    res.length +
                    '<span class="visually-hidden">unread messages</span></span>';
                $("#tab_ale").html(ss);
                $("#tab_ale").addClass("animate__wobble animate__repeat-3");
            } else {
                $("#tab_ale").html(
                    '<svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M10 5a2 2 0 1 1 4 0a7 7 0 0 1 4 6v3a4 4 0 0 0 2 3h-16a4 4 0 0 0 2 -3v-3a7 7 0 0 1 4 -6"></path><path d="M9 17v1a3 3 0 0 0 6 0v-1"></path></svg>'
                );
                $("#con_mensajes").html("");
            }
        },
    }).fail(function (jqXHR, textStatus, errorthrown) {
        if (jqXHR.status === 0) {
            alert("Not connect: Verify Network.");
        } else if (jqXHR.status == 404) {
            alert("Requested page not found [404]");
        } else if (jqXHR.status == 500) {
            alert("Internal Server Error [500].");
        } else if (textStatus === "parsererror") {
            alert("Requested JSON parse failed.");
        } else if (textStatus === "timeout") {
            alert("Time out error.");
        } else if (textStatus === "abort") {
            alert("Ajax request aborted.");
        } else {
            alert("Uncaught Error: " + jqXHR.responseText);
        }
    });
}

function enviar_m(empleado, cedula, Sexo, edad) {
    $("#t_nombre").html(empleado);
    $("#ip_cedula_to").val(cedula);
    if (Sexo == "M") {
        $("#t_nombre").removeClass("girl");
        $("#t_nombre").addClass("boy");
    } else {
        $("#t_nombre").removeClass("boy");
        $("#t_nombre").addClass("girl");
    }
    //$("#t_edad").html(edad + " años");
    $("#img_empleado").attr("src", "http://movilidadmanta.gob.ec/imagenes_empleados/" + cedula + ".jpeg");
    $("#txt_mensaje").val("");
    $("#modal-report").modal("show");
}

const cerrar_notificacion = () => {
    let id = $("#id_notificacion").val();
    $.ajax({
        url: "/desactivar_notificacion/" + id,
        type: "GET",
        dataType: "json",
        success: function (res) {
            if (res.respuesta) {
                $("#modal_notificaciones").modal("hide");
            }
        },
    }).fail(function (jqXHR, textStatus, errorthrown) {
        if (jqXHR.status === 0) {
            alert("Not connect: Verify Network.");
        } else if (jqXHR.status == 404) {
            alert("Requested page not found [404]");
        } else if (jqXHR.status == 500) {
            alert("Internal Server Error [500].");
        } else if (textStatus === "parsererror") {
            alert("Requested JSON parse failed.");
        } else if (textStatus === "timeout") {
            alert("Time out error.");
        } else if (textStatus === "abort") {
            alert("Ajax request aborted.");
        } else {
            alert("Uncaught Error: " + jqXHR.responseText);
        }
    });
};
function open_notificacion(id) {
    $.ajax({
        url: "/Get_notificaciones/" + id,
        type: "GET",
        dataType: "json",
        success: function (res) {
            if (res.respuesta) {
                $("#id_notificacion").val(id);
                $("#text_asunto").html(res.data[0].asunto);
                $("#noti_texto").html(res.data[0].contenido);
                $("#modal_notificaciones").modal("show");
            }
        },
    }).fail(function (jqXHR, textStatus, errorthrown) {
        if (jqXHR.status === 0) {
            alert("Not connect: Verify Network.");
        } else if (jqXHR.status == 404) {
            alert("Requested page not found [404]");
        } else if (jqXHR.status == 500) {
            alert("Internal Server Error [500].");
        } else if (textStatus === "parsererror") {
            alert("Requested JSON parse failed.");
        } else if (textStatus === "timeout") {
            alert("Time out error.");
        } else if (textStatus === "abort") {
            alert("Ajax request aborted.");
        } else {
            alert("Uncaught Error: " + jqXHR.responseText);
        }
    });
}
function enviar_file(cedula) {
    const file = e.target.files[0];
    const reader = new FileReader();
    file_name = file.name;
    file_type = file.type;
    file_size = file.size;
    reader.onloadend = () => {
        fileURL = reader.result;
    };
    reader.readAsDataURL(file);
}

function enviar_mensaje_file(cedula, filebase64, f_name, f_tipo) {
    console.log(cedula);
    let mensaje = $("#" + cedula).val();
    let user_to = $("#ip_user_to_" + cedula).val();
    let user = $("#id_user_").val();

    const date = new Date();
    let data = {
        mensaje,
        user_to,
        user,
        date,
        filebase64,
        f_name,
        f_tipo,
    };

    //$("#content_chat_" + cedula).scrollTop = $("#content_chat_" + cedula).scrollHeight;
    socket.emit("send message file", data, (data_) => {
        $("#content_chat_" + cedula)
            .append(`<div class="d-flex flex-row justify-content-end">
                        <div>
                            <div class="flex jc_space-around car_file c_chat small p-2 me-3 mb-1 text-white rounded-3 bg-primary">
                                <span>${data.f_name}</span>
                                <span class="flex alg_center">
                                    <a class="icon_descarga" href="javascript:void(0)" onclick="descargar_archivo(${data_})">
                                        <i class="fa-solid fa-circle-down"></i> 
                                    </a>
                                </span>
                            </div>
                        </div><img src="http://movilidadmanta.gob.ec/imagenes_empleados/${data.user}.jpeg" alt="avatar 1" class="user_img_chat">`);
        $("#" + cedula).val("");
        scrollToBottom(cedula);
    });
}

function enviar_mensaje(cedula) {
    console.log(cedula);
    let mensaje = $("#" + cedula).val();
    let user_to = $("#ip_user_to_" + cedula).val();
    let user = $("#id_user_").val();

    if (mensaje == "") {
        return;
    }
    const date = new Date();
    console.log(date);
    let data = {
        mensaje,
        user_to,
        user,
        date,
    };
    $("#content_chat_" + cedula)
        .append(`<div class="d-flex flex-row justify-content-end">
                        <div><p class="small p-2 me-3 mb-1 text-white rounded-3 bg-primary">${data.mensaje}</p>
                        </div><img src="http://movilidadmanta.gob.ec/imagenes_empleados/${data.user}.jpeg" alt="avatar 1" class="user_img_chat">`);
    $("#" + cedula).val("");
    scrollToBottom(cedula);

    //$("#content_chat_" + cedula).scrollTop = $("#content_chat_" + cedula).scrollHeight;
    socket.emit("send message", data, (data) => {
        // $chat.append(`<p class="error">${data}</p>`);
        console.log(data);
    });
}

function close_chat(cedula) {
    // $("#chat__mini").show()
    $("#chat_" + cedula).hide();

    let min =
        '<button class="btn position-relative" onclick="open_chat(' +
        cedula +
        ');">' +
        cedula +
        '<span class="badge bg-indigo badge-notification badge-pill">1</span></button>';
    $("#chat_zip_mini").append(min);
}

function close_c(cedula) {
    //chat_opens.push(cedula);

    chat_opens.forEach(function (index, user) {
        let index2 = buscar_chat(cedula);
        if (index2 != -1) {
            p = index2;
            //console.log(user);
        }
    });
    chat_opens.splice(p, 1);
    $("#chat__content").html("");
}

const open_chat_ = async (cedula, nombre) => {
    let user_to = cedula; //cedula del usuario
    let user = parseInt($("#id_user_").val());
    let datos__ = {
        user,
        user_to,
    };
    await get_msm(datos__, cedula);

    let user_current = $("#id_user_").val();
    let inc = buscar_chat(cedula);
    if (inc == -1) {
        let chat_html =
            '<div id="chat_' +
            cedula +
            '" class=" mr-l-1"><div class="card" > <div class="card-header d-flex justify-content-between align-items-center p-3">';
        chat_html += '<h5 class="mb-0">' + nombre + "</h5>";
        chat_html +=
            '<input type="hidden" id="ip_user_to_' +
            cedula +
            '" value="' +
            cedula +
            '">';
        chat_html +=
            '<div class="d-flex justify-content-end"><button type="button" onclick="close_chat(' +
            cedula +
            ')" class="btn btn-primary btn-sm" data-mdb-ripple-color="dark">-</button>';
        chat_html +=
            '<button type="button" onclick="close_c(' +
            cedula +
            ')" class="btn btn-primary btn-sm" data-mdb-ripple-color="dark">X</button></div></div>';
        chat_html +=
            '<div class="card-body" id="content_chat_' +
            cedula +
            '" style="position: relative; height: 400px; overflow: auto;"></div>';
        chat_html +=
            '<div class="card-footer text-muted d-flex justify-content-start align-items-center p-3">';
        chat_html +=
            '<img src="http://movilidadmanta.gob.ec/imagenes_empleados/' +
            user_current +
            '.jpeg" alt="' +
            cedula +
            '" class="user_img_chat">';
        chat_html +=
            '<input type="text" class="form-control" id="' +
            cedula +
            '" data-log placeholder="Escriba su mensaje.." data-emojiable="true" autocomplete="off">';
        chat_html +=
            '<div class="file-upload"><i class="fa-solid fa-paperclip"></i><input type="file" id="F_' +
            cedula +
            '"data-file  name="somename" /></div>';
        chat_html +=
            '<a class="ms-3" href="#!" onclick="enviar_mensaje(' +
            cedula +
            ')"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-send" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M10 14l11 -11"></path><path d="M21 3l-6.5 18a.55 .55 0 0 1 -1 0l-3.5 -7l-7 -3.5a.55 .55 0 0 1 0 -1l18 -6.5"></path></svg></a></div></div></div>';

        $("#chat__content").append(chat_html);
        $("#chat__mini").hide();
        chat_opens.push(cedula);
        let logMe = document.querySelectorAll("[data-log]");
        for (let item of logMe) {
            item.addEventListener(
                "keypress",
                function (event) {
                    if (13 == event.which) {
                        console.log(this.id + " " + this.value);
                        if (this.value != "") {
                            enviar_mensaje(this.id);
                        }
                    }
                },
                false
            );
        }

        let logFile = document.querySelectorAll("[data-file]");
        for (let item of logFile) {
            item.addEventListener(
                "change",
                function (event) {
                    const file = event.target.files[0];
                    const reader = new FileReader();
                    file_name = file.name;
                    file_type = file.type;
                    file_size = file.size;
                    reader.onloadend = () => {
                        fileURL = reader.result;
                        console.log(fileURL);
                        let use_to = this.id;
                        enviar_mensaje_file(
                            use_to.substring(2),
                            fileURL,
                            file_name,
                            file_type
                        );
                    };
                    reader.readAsDataURL(file);
                },
                false
            );
        }
    } else {
        $("#chat_" + cedula).show();
        $("#chat_zip_mini").html("");
    }
    scrollToBottom(cedula);
};

const get_msm = async (datos__, cedula) => {
    socket.emit("load old msgs", datos__, (data) => {
        for (i = 0; i < data.length; i++) {
            if (cedula == parseInt(data[i].men_userto)) {
                let mensaje = "";
                if (data[i].men_message == "") {
                    mensaje = `<div class="d-flex flex-row justify-content-end">
                    <div><div class="flex jc_space-around small p-2 me-3 mb-1 car_file c_chat text-white rounded-3 bg-primary">
                    <span>${data[i].me_fname
                        }</span><span class="flex alg_center"><a class="icon_descarga href="javascript:void(0)" onclick="descargar_archivo(${data[i].men_id
                        })" ><i class="fa-solid fa-circle-down"></i></a></span></div>
                    <p class="small ms-3 mb-3 rounded-3 text-muted c_fecha">${data[i].me_fecha
                        }</p>
                    </div><img src="http://movilidadmanta.gob.ec/imagenes_empleados/${parseInt(
                            data[i].men_user
                        )}.jpeg" alt="avatar 1" class="user_img_chat">`;
                } else {
                    mensaje = `<div class="d-flex flex-row justify-content-end">
                    <div><p class="small p-2 me-3 mb-1 c_chat text-white rounded-3 bg-primary">${data[i].men_message
                        }</p>
                    <p class="small ms-3 mb-3 rounded-3 text-muted c_fecha">${data[i].me_fecha
                        }</p>
                    </div><img src="http://movilidadmanta.gob.ec/imagenes_empleados/${parseInt(
                            data[i].men_user
                        )}.jpeg" alt="avatar 1" class="user_img_chat">`;
                }
                $("#content_chat_" + parseInt(data[i].men_userto)).append(
                    mensaje
                );
            } else {
                let mensaje = "";
                if (data[i].men_message == "") {
                    mensaje = `<div class="d-flex flex-row justify-content-start mb-4">
                    <img src="http://movilidadmanta.gob.ec/imagenes_empleados/${parseInt(
                        data[i].men_user
                    )}.jpeg" alt="avatar 2" class="user_img_chat">
                    <div>
                        <div class="flex small p-2 ms-3 mb-1 rounded-3 c_chat car_file_e" style="background-color: #f5f6f7;">${data[i].me_fname
                        }<span class="flex alg_center"><a class="icon_descarga" href="#"  onclick="descargar_archivo(${data[i].men_id
                        })"><i class="fa-solid fa-circle-down"></i></a></span></div>
                        <p class="small ms-3 mb-3 rounded-3 text-muted c_fecha">${data[i].me_fecha
                        }</p>
                    </div>
                </div>`;
                } else {
                    mensaje = `<div class="d-flex flex-row justify-content-start mb-4">
                    <img src="http://movilidadmanta.gob.ec/imagenes_empleados/${parseInt(
                        data[i].men_user
                    )}.jpeg" alt="avatar 2" class="user_img_chat">
                    <div>
                        <p class="small p-2 ms-3 mb-1 rounded-3 c_chat" style="background-color: #f5f6f7;">
                        ${data[i].men_message}
                        </p>
                        <p class="small ms-3 mb-3 rounded-3 text-muted c_fecha">${data[i].me_fecha
                        }</p>
                    </div>
                </div>`;
                }

                $("#content_chat_" + parseInt(data[i].men_user)).append(
                    mensaje
                );
            }
        }
    });
};

function descargar_archivo(id) {
    var url = "/descargar_file/" + id;
    console.log(url);
    var a = document.createElement("a");
    a.target = "_blank";
    a.href = url;
    a.click();
}

const open_chat = async (cedula, nombres) => {
    let user_to = cedula; //cedula del usuario
    let user = parseInt($("#id_user_").val());
    let datos__ = {
        user,
        user_to,
    };
    await get_msm(datos__, cedula);

    let user_current = $("#id_user_").val();
    let inc = buscar_chat(cedula);
    if (inc == -1) {
        let chat_html =
            '<div id="chat_' +
            cedula +
            '" class=" mr-l-1"><div class="card" > <div class="card-header d-flex justify-content-between align-items-center p-3">';
        chat_html += '<h5 class="mb-0">' + nombres + "</h5>";
        chat_html +=
            '<input type="hidden" id="ip_user_to_' +
            cedula +
            '" value="' +
            cedula +
            '">';
        chat_html +=
            '<div class="d-flex justify-content-end"><button type="button" onclick="close_chat(' +
            cedula +
            ')" class="btn btn-primary btn-sm" data-mdb-ripple-color="dark">-</button>';
        chat_html +=
            '<button type="button" onclick="close_c(' +
            cedula +
            ')" class="btn btn-primary btn-sm" data-mdb-ripple-color="dark">X</button></div></div>';
        chat_html +=
            '<div class="card-body" id="content_chat_' +
            cedula +
            '" style="position: relative; height: 400px; overflow: auto;"></div>';
        chat_html +=
            '<div class="card-footer text-muted d-flex justify-content-start align-items-center p-3">';
        chat_html +=
            '<img src="http://movilidadmanta.gob.ec/imagenes_empleados/' +
            user_current +
            '.jpeg" alt="' +
            cedula +
            '" class="user_img_chat">';
        chat_html +=
            '<input type="text" class="form-control" id="' +
            cedula +
            '" data-log placeholder="Escriba su mensaje.." data-emojiable="true" autocomplete="off">';
        chat_html +=
            '<div class="file-upload"><i class="fa-solid fa-paperclip"></i><input type="file" id="F_' +
            cedula +
            '"data-file  name="somename" /></div>';
        chat_html +=
            '<a class="ms-3" href="#!" onclick="enviar_mensaje(' +
            cedula +
            ')"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-send" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M10 14l11 -11"></path><path d="M21 3l-6.5 18a.55 .55 0 0 1 -1 0l-3.5 -7l-7 -3.5a.55 .55 0 0 1 0 -1l18 -6.5"></path></svg></a></div></div></div>';
        $("#chat__content").append(chat_html);
        $("#chat__mini").hide();
        chat_opens.push(cedula);
        let logMe = document.querySelectorAll("[data-log]");
        for (let item of logMe) {
            item.addEventListener(
                "keypress",
                function (event) {
                    if (13 == event.which) {
                        console.log("id al dar enter" + this.id);
                        enviar_mensaje(this.id);
                    }
                },
                false
            );
        }
        let logFile = document.querySelectorAll("[data-file]");
        for (let item of logFile) {
            item.addEventListener(
                "change",
                function (e) {
                    const file = e.target.files[0];
                    const reader = new FileReader();
                    file_name = file.name;
                    file_type = file.type;
                    file_size = file.size;
                    reader.onloadend = () => {
                        fileURL = reader.result;
                        console.log(fileURL);
                        let use_to = this.id;
                        enviar_mensaje_file(
                            use_to.substring(2),
                            fileURL,
                            file_name,
                            file_type
                        );
                    };
                    reader.readAsDataURL(file);
                },
                false
            );
        }
        scrollToBottom(cedula);
        // Initializes and creates emoji set from sprite sheet
        /*window.emojiPicker = new EmojiPicker({
            emojiable_selector: "[data-emojiable=true]",
            assetsPath: "emoji/lib/img/",
            popupButtonClasses: "fa-solid fa-paperclip",
        });
        
        window.emojiPicker.discover();*/
    } else {
        $("#chat_" + cedula).show();
        $("#chat_zip_mini").html("");
        scrollToBottom(cedula);
    }
};
$(document).ready(function () {
    mueveReloj();
});

function buscar_chat(cedula) {
    var index = -1;
    var n = chat_opens.length;
    for (var i = 0; i < n; i++) {
        if (chat_opens[i] === cedula) {
            index = i;
            break;
        }
    }
    return index;
}

function buscar_chat_posicion(cedula) {
    var index = -1;
    var n = chat_opens.length;
    for (var i = 0; i < n; i++) {
        if (chat_opens[i] === cedula) {
            index = i;
            break;
        }
    }
    return index;
}

function mueveReloj() {
    momentoActual = new Date();
    hora = momentoActual.getHours();
    minuto = momentoActual.getMinutes();
    segundo = momentoActual.getSeconds();

    str_segundo = new String(segundo);
    if (str_segundo.length == 1) segundo = "0" + segundo;

    str_minuto = new String(minuto);
    if (str_minuto.length == 1) minuto = "0" + minuto;

    str_hora = new String(hora);
    if (str_hora.length == 1) hora = "0" + hora;
    let d = "AM";
    if (hora >= 12) {
        d = "PM";
    }

    horaImprimible = hora + " : " + minuto + " : " + segundo + " " + d;

    //document.form_reloj.reloj.value = horaImprimible
    document.getElementById("reloj").innerHTML = horaImprimible;
    //$("#reloj").html(horaImprimible);
    setTimeout("mueveReloj()", 1000);
}

function cerrar_cumple() {
    $("#cont_cumpleaños").removeClass("animate__fadeIn");
    $("#cont_cumpleaños").addClass("animate__fadeOutDown");
}

function enviar_cumpleaños() {
    let mensaje = $("#txt_mensaje").val();
    let user_to = $("#ip_cedula_to").val();
    let token = $("#csrf-token").val();
    if (mensaje == "") {
        alert("No puede enviar un mensaje vacio");
    } else {
        let datos = {
            mensaje: mensaje,
            user_to: user_to,
        };
        $.ajax({
            url: "/send_mensaje",
            type: "POST",
            dataType: "json",
            headers: {
                "X-CSRF-TOKEN": token,
            },
            data: datos,
            success: function (res) {
                if (res.respuesta) {
                    $("#modal-report").modal("hide");
                }
            },
        }).fail(function (jqXHR, textStatus, errorthrown) {
            if (jqXHR.status === 0) {
                alert("Not connect: Verify Network.");
            } else if (jqXHR.status == 404) {
                alert("Requested page not found [404]");
            } else if (jqXHR.status == 500) {
                alert("Internal Server Error [500].");
            } else if (textStatus === "parsererror") {
                alert("Requested JSON parse failed.");
            } else if (textStatus === "timeout") {
                alert("Time out error.");
            } else if (textStatus === "abort") {
                alert("Ajax request aborted.");
            } else {
                alert("Uncaught Error: " + jqXHR.responseText);
            }
        });
    }
}

function scrollToBottom(cedula) {
    setTimeout(() => {
        var d = $("#content_chat_" + cedula);
        var height = d[0].scrollHeight;
        console.log(height);
        d.scrollTop(height + 60);
    }, 1500);
}
