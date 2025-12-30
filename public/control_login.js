$(document).ready(function () {
    $("#ip_user").focus();
});

$("#ip_clave").keypress(function (tecla) {
    if (tecla.which == 13) {
        let user = $("#ip_user").val();
        let clave = $("#ip_clave").val();
        let tipo = $("#s_tipo").val();
        if (user == "" && clave == "") {
            alert("El nombre de usuario y contraseña se encuentra vacio");
        } else if (user == "") {
            alert("El nombre de usuario se encuentra vacio");
        } else if (clave == "") {
            alert("La contraseña se encuentra vacio");
        } else if (tipo == 0) {
            alert("Por favor seleccione un tipo de servicio");
        } else {
            iniciar_s(user, clave, tipo);
        }
    }
});

function login() {
    let user = $("#ip_user").val();
    let clave = $("#ip_clave").val();
    let tipo = $("#s_tipo").val();
    if (user == "" && clave == "") {
        alert("El nombre de usuario y contraseña se encuentra vacio");
    } else if (user == "") {
        alert("El nombre de usuario se encuentra vacio");
    } else if (clave == "") {
        alert("La contraseña se encuentra vacio");
    } else if (tipo == 0) {
        alert("Por favor seleccione un tipo de servicio");
    } else {
        iniciar_s(user, clave, tipo);
    }
}

function iniciar_s(user, clave, tipo) {
    var token = $("#token").val();
    var delay = 2000;
    $.ajax({
        url: 'login',
        type: 'POST',
        dataType: 'json',
        headers: { 'X-CSRF-TOKEN': token },
        data: {
            user: user,
            clave: clave,
            tipo: tipo
        },
        beforeSend: function () {
            inactivar_boton();
        },
        success: function (response) {
            setTimeout(function () {
                activar_boton();
                if (response.sms == "USER FAIL") {
                    notif({
                        type: "error",
                        msg: "<b>Error: </b>Usuario Incorrecto",
                        position: "center",
                        autohide: false,
                    });
                    $("#btn-iniciar-sesion").html("Iniciar Sesión");
                } else if (response.sms == "PASS FAIL") {
                    notif({
                        type: "error",
                        msg: "<b>Error: </b>Clave Incorrecta",
                        position: "center",
                        autohide: false,
                    });
                    $("#btn-iniciar-sesion").html("Iniciar Sesión");
                } else if (response.respuesta == true) {
                    // Swal.fire("Alerta", "Ha iniciado sesion correctamente", "success")
                    location.href = "/home";
                }
            }, delay);
        }
    });
}

function inactivar_boton() {
    $("#btn_login").html('<i class="fas fa-spinner fa-spin fa-2x fa-fw"></i>Cargando...')
    $("#btn_login").attr('disabled', 'true');
}

function activar_boton() {
    $("#btn_login").html("Iniciar sesión");
    $("#btn_login").removeAttr('disabled');
}