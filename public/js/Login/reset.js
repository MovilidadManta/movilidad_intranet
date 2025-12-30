

const load_cambiar = ()=>{
    $("#btn_cambiar").attr('disabled', true);
    let html = '<i class="fa-solid fa-spinner fa-spin"></i><span class="m-l1">Cambiando contraseña</span>'
    $("#btn_cambiar").html(html)
}


const onload_cambiar = ()=> {
    let html = ' Cambiar'
    $("#btn_cambiar").html(html);
    $("#btn_cambiar").removeAttr('disabled');
}


$("#btn_cambiar").click(function () {
    load_cambiar();
    let contrasena = $("#ip_pass").val();
    let new_contrasena = $("#ip_newpass").val();
    let con_contrasena = $("#ip_conpass").val();

    if (new_contrasena != con_contrasena) {
        alert("La contrasena nueva no coincide con la confirmacion");
        alertify.error('Error message');
        onload_cambiar();

        return;
    } else if (contrasena == "") {
        //alert("Por favor debe ingresar la contrasena actual");
        notif({
            type: "error",
            msg: "<b>Error: </b>Por favor debe ingresar la contrasena actual",
            position: "center",
            autohide: false,
        });
        $("#ip_pass").focus();
       // alertify.error('Por favor debe ingresar la contrasena actual');
        onload_cambiar();

        return;
    } else if (new_contrasena == "" && con_contrasena == "") {
        notif({
            type: "error",
            msg: "<b>Error: </b>La nueva contrasena esta vacio y no esta confirmada",
            position: "center",
            autohide: false,
        });
        $("#ip_newpass").focus();

        onload_cambiar();

        return;
    } else if (con_contrasena == "") {
        notif({
            type: "error",
            msg: "<b>Error: </b>La contrasena de confirmacion esta vacio!",
            position: "center",
            autohide: false,
        });
        $("#ip_conpass").focus();

        //alert("La contrasena de confirmacion esta vacio!");
        onload_cambiar();

        return;
    } else {
        let dat = {
            contrasena,
            new_contrasena,
            con_contrasena,
        };
        cambiar_contra(dat);
    }
});
function cambiar_contra(data) {
    var token = $("#csrf-token").val();
    $.ajax({
        url: "/cambiar_pass",
        type: "POST",
        dataType: "json",
        headers: { "X-CSRF-TOKEN": token },
        data: data,
        success: function (response) {
            onload_cambiar();
            if (response.clave == false) {
                notif({
                    type: "error",
                    msg: "<b>Error: </b>Clave Incorrecta",
                    position: "center",
                    autohide: false,
                });
                $("#ip_pass").focus();
            } else if (response.respuesta == true) {
                console.log(response.sql);
                $("#modal_ok").modal("show");
                setTimeout(() => { location.href = "/cerrar-sesion";  }, 2000);
                //sleep(3000).then(() => { });
            }
        },
    });
}


