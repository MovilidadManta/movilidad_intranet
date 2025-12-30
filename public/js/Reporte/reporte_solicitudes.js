
$(document).ready(function () {
    $("#table-reporte-solicitud").DataTable();
    $("#table-reporte-solicitud_filter").addClass('porce_mar');
})

/*INICIO DE FUNCION PARA LISTAR EN REPORTE DE LAS SOLICITUDES DE PERMISOS/VACACIONES*/
function get_reportes_permisos() {
    $("#global-loader").addClass("block");
    $("#global-loader").removeClass("none");
    console.log("listar empleado");
    let fecha_inicio;
    let fecha_fin;

    if ($("#txt-fecha-inicio").val() != "") {
        fecha_inicio = $("#txt-fecha-inicio").val();
        fecha_fin = $("#txt-fecha-fin").val();
    } else {
        fecha_inicio = 0;
        fecha_fin = 0;
    }

    //alert(fecha_inicio)

    $.ajax({
        url: "/get-reporte-permiso/" + fecha_inicio + "/" + fecha_fin,
        type: "GET",
        dataType: "json",
        success: function (response) {
            var ht = "";

            console.log(response.data);
            ht += '<div id="table-default" class="table-responsive">'
            ht += '    <table class=" card-table table-vcenter  datatable" id="table-reporte-solicitud">'
            ht += '        <thead class="background-thead display nowrap" align="center">'
            ht += '            <tr>'
            ht += '                <th align="center" class="border-bottom-0 color-th background-thead">Solicitante'
            ht += '                </th>'
            ht += '                <th align="center" class="border-bottom-0 color-th background-thead">Tipo  '
            ht += '                    Permiso</th>'
            ht += '                <th align="center" class="border-bottom-0 color-th background-thead">Fecha</th>'
            ht += '                <th align="center" class="border-bottom-0 color-th background-thead">Fecha'
            ht += '                    Solicitud'
            ht += '                </th>'
            ht += '                <th align="center" class="border-bottom-0 color-th background-thead">Observacion'
            ht += '                </th>'
            ht += '                <th align="center" class="border-bottom-0 color-th background-thead">Observ. Rechazo'
            ht += '                </th>'
            ht += '                 <th align="center" class="border-bottom-0 color-th background-thead">Estado</th>'
            ht += '            </tr>'
            ht += '        </thead>'
            ht += '        <tbody class="table-tbody">'
            $(response.data).each(function (i, data) {
                ht += '    <tr>'
                ht += '         <td data-label="Name">'
                ht += '            <div class="d-flex py-1 align-items-center">'
                ht += '                <div class="flex-fill">'
                ht += '                    <div class="font-weight-medium">' + data.empleado + '</div>'
                ht += '                </div>'
                ht += '            </div>'
                ht += '        </td>'
                ht += '        <td data-label="Title">'
                ht += '            <div>' + data.tipo_permiso + '</div>'
                ht += '        </td>'
                ht += '        <td class="text-secondary" data-label="Role">'
                ht += '            <div>' + data.fecha_inicio + ' - ' + data.fecha_final + '</div>'
                ht += '            <div>' + data.hora_inicio + ' - ' + data.hora_final + '</div>'
                ht += '        </td>'
                ht += '        <td class="text-secondary" data-label="Role">'
                ht += '            <div>' + data.fecha_solicitud + '</div>'
                ht += '        </td>'
                ht += '        <td>'
                ht += '            <p>' + data.observacion + '</p>'
                ht += '        </td>'
                ht += '        <td>'
                ht += '            <p>' + data.observacion_rechazo + '</p>'
                ht += '        </td>'
                ht += '        <td>'
                if (data.estado == 'INGRESADO') {
                    ht += '            <span class="badge bg-green text-green-fg">' + data.estado + '</span>'
                } else if (data.estado == 'APROBADO') {
                    ht += '            <span class="badge bg-blue text-blue-fg">' + data.estado + '</span>'
                } else if (data.estado == 'RECHAZADO') {
                    ht += '            <span class="badge bg-red text-red-fg">' + data.estado + '</span>'
                }
                ht += '        </td>'
                ht += '    </tr>'
            })
            ht += '        </tbody >'
            ht += '    </table >'
            ht += '</div >'
            $("#div-table-reporte-solicitud").html(ht);
            $("#div-file").removeClass('none')
            $("#div-file").addClass('block')

            $("#table-reporte-solicitud").DataTable();
            $("#table-reporte-solicitud_filter").addClass('porce_mar');
            $("#global-loader").removeClass("block");
            $("#global-loader").addClass("none");
        },
    });
}
/*FIN DE FUNCION PARA LISTAR EN REPORTE DE LAS SOLICITUDES DE PERMISOS/VACACIONES*///


/*INICIO DE FUNCION PARA LISTAR EN REPORTE DE PDF DE LAS SOLICITUDES DE PERMISOS/VACACIONES*/
function pdf_reporte_solicitud() {
    $("#global-loader").addClass("block");
    $("#global-loader").removeClass("none");
    let fecha_inicio;
    let fecha_fin;

    if ($("#txt-fecha-inicio").val() != "") {
        fecha_inicio = $("#txt-fecha-inicio").val();
        fecha_fin = $("#txt-fecha-fin").val();
    } else {
        fecha_inicio = 0;
        fecha_fin = 0;
    }

    location.href = "/imprimir-pdf-reporte-permiso/" + fecha_inicio + "/" + fecha_fin;
}
/*FIN DE FUNCION PARA LISTAR EN REPORTE DE LAS SOLICITUDES DE PERMISOS/VACACIONES*/

/*INICIO DE FUNCION PARA LISTAR EN REPORTE DE EXCELL DE LAS SOLICITUDES DE PERMISOS/VACACIONES*/
function excell_reporte_solicitud() {
    $("#global-loader").addClass("block");
    $("#global-loader").removeClass("none");
    let fecha_inicio;
    let fecha_fin;

    if ($("#txt-fecha-inicio").val() != "") {
        fecha_inicio = $("#txt-fecha-inicio").val();
        fecha_fin = $("#txt-fecha-fin").val();
    } else {
        fecha_inicio = 0;
        fecha_fin = 0;
    }

    location.href = "/imprimir-excel-reporte-permiso/" + fecha_inicio + "/" + fecha_fin;
}
/*FIN DE FUNCION PARA LISTAR EN REPORTE DE EXCELLDE LAS SOLICITUDES DE PERMISOS/VACACIONES*/