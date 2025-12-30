$(document).ready(function () {
    $("#cont_preload").show();
    get_empleado_id($("#txt-id-empleado").val())
})

/*INICIO PARA FUNCION CONSULTAR EMPLEADO POR ID*/
function get_empleado_id(id_empl) {
    $("#global-loader").addClass("block");
    $("#global-loader").removeClass("none");

    id_empleado = id_empl
    $.ajax({
        url: '/get-empleado-id/' + id_empleado,
        type: "GET",
        dataType: "json",
        success: function (response) {
            if (response.respuesta == true) {
                var ht = ""
                console.log(response.data)
                var id_evaluador = 0
                var id_evaluado = 0
                ht += '<div class="row">'
                $(response.data_empleado_evaluado).each(function (i, data) {
                    ht += ' <div class="col"><div class="card"><div class="card-body"><div class="card-title">COLABORADOR</div>'
                    ht += ' <div class="mb-2"> <i class="fa-solid fa-user-tie"></i><strong>Nombres y Apellidos: </strong> <strong>' + data.emp_nombre + ' ' + data.emp_apellido + '</strong></div>'
                    ht += ' <div class="mb-2"> <i class="fa-regular fa-address-card"></i><strong>Cédula: </strong> <strong>' + data.emp_cedula + '</strong></div>'
                    ht += ' <div class="mb-2"> <i class="fa-solid fa-briefcase"></i></i><strong>Dirección: </strong> <strong>' + data.dep_departamento + '</strong></div>'
                    ht += ' <div class="mb-2"> <i class="fa-solid fa-briefcase"></i></i><strong>Jefatura: </strong> <strong>' + data.per_perfil + '</strong></div>'
                    ht += ' <div class="mb-2"> <i class="fa-solid fa-briefcase"></i></i><strong>Cargo: </strong> <strong>' + data.emp_cargo + '</strong></div>'
                    id_evaluado = data.emp_id
                })
                ht += '</div></div></div>'

                /*$(response.data_empleado_evaluado).each(function (i, data) {
                    ht += '<div class="text-wrap">'
                    ht += '     <div class="example">'
                    ht += '         <div class="panel panel-primary tabs-style-2">'
                    ht += '             <table class="table table-bordered">'

                    ht += '                 <tr class="backound_t">'
                    ht += '                     <td width="15%" colspan="4"><strong>COLABORADOR</strong></td>'
                    ht += '                 </tr>'

                    ht += '                 <tr>'
                    ht += '                     <td width="15%"><strong>Nombres y Apellidos:</strong></td>'
                    ht += '                     <td width="35%">' + data.emp_nombre + ' ' + data.emp_apellido + '</td>'
                    ht += '                     <td width="15%"><strong> Cédula:</strong></td>'
                    ht += '                     <td width="35%">' + data.emp_cedula + '</td>'
                    ht += '                 </tr>'

                    ht += '                 <tr>'
                    ht += '                     <td width="15%"><strong> Dirección:</strong></td>'
                    ht += '                     <td width="35%">' + data.dep_departamento + '</td>'
                    ht += '                     <td width="15%"><strong>Jefatura:</strong></td>'
                    ht += '                     <td width="35%">' + data.per_perfil + '</td>'
                    ht += '                 </tr>'

                    ht += '                 <tr>'
                    ht += '                     <td width="15%"><strong> Cargo:</strong></td>'
                    ht += '                     <td width="35%">' + data.emp_cargo + '</td>'
                    ht += '                     <td width="15%"><strong>Telefono:</strong></td>'
                    ht += '                     <td width="35%">' + data.emp_telefono + '</td>'
                    ht += '                 </tr>'
                    ht += '             </table>'
                    ht += '         </div>'
                    ht += '     </div>'
                    ht += '</div>'
                    id_evaluado = data.emp_id
                })*/
                $(response.data_empleado_evaluador).each(function (i, data) {
                    ht += '<div class="col"><div class="card"><div class="card-body"><div class="card-title">EVALUADOR</div>'
                    ht += ' <div class="mb-2"> <i class="fa-solid fa-user-tie"></i><strong>Nombres y Apellidos: </strong><strong>' + data.emp_nombre + ' ' + data.emp_apellido + '</strong></div>'
                    ht += ' <div class="mb-2"> <i class="fa-regular fa-address-card"></i><strong>Cédula: </strong><strong>' + data.emp_cedula + '</strong></div>'
                    ht += ' <div class="mb-2"> <i class="fa-solid fa-briefcase"></i></i><strong>Dirección: </strong><strong>' + data.dep_departamento + '</strong></div>'
                    ht += ' <div class="mb-2"> <i class="fa-solid fa-briefcase"></i></i><strong>Jefatura: </strong><strong>' + data.per_perfil + '</strong></div>'
                    ht += ' <div class="mb-2"> <i class="fa-solid fa-briefcase"></i></i><strong>Cargo: </strong><strong>' + data.emp_cargo + '</strong></div>'
                    id_evaluador = data.emp_id

                })
                ht += '</div></div></div></div>'
                /* $(response.data_empleado_evaluador).each(function (i, data) {
                     ht += '<div class="text-wrap">'
                     ht += '     <div class="example">'
                     ht += '         <div class="panel panel-primary tabs-style-2">'
                     ht += '             <table class="table table-bordered">'
 
                     ht += '                 <tr class="backound_t">'
                     ht += '                     <td width="15%" colspan="4"><strong>EVALUADOR</strong></td>'
                     ht += '                 </tr>'
 
                     ht += '                 <tr>'
                     ht += '                     <td width="15%"><strong>Nombres y Apellidos:</strong></td>'
                     ht += '                     <td width="35%">' + data.emp_nombre + ' ' + data.emp_apellido + '</td>'
                     ht += '                     <td width="15%"><strong> Cédula:</strong></td>'
                     ht += '                     <td width="35%">' + data.emp_cedula + '</td>'
                     ht += '                 </tr>'
 
                     ht += '                 <tr>'
                     ht += '                     <td width="15%"><strong> Dirección:</strong></td>'
                     ht += '                     <td width="35%">' + data.dep_departamento + '</td>'
                     ht += '                     <td width="15%"><strong>Jefatura:</strong></td>'
                     ht += '                     <td width="35%">' + data.per_perfil + '</td>'
                     ht += '                 </tr>'
 
                     ht += '                 <tr>'
                     ht += '                     <td width="15%"><strong> Cargo:</strong></td>'
                     ht += '                     <td width="35%">' + data.emp_cargo + '</td>'
                     ht += '                     <td width="15%"><strong>Telefono:</strong></td>'
                     ht += '                     <td width="35%">' + data.emp_telefono + '</td>'
                     ht += '                 </tr>'
                     ht += '             </table>'
                     ht += '         </div>'
                     ht += '     </div>'
                     ht += '</div>'
                     id_evaluador = data.emp_id
 
                 })*/

                ht += '<div class="text-wrap mg-t-10">'
                ht += '     <div class="example">'
                ht += '         <div class="panel panel-primary tabs-style-2">'
                ht += '             <h5 class="card-title mb-3">Responder las preguntas con la mayor sinceridad posible.</h5>'
                ht += '             <table class="table table-bordered" id="table-pregunta">'

                ht += '                 <tr class="backound_t">'
                ht += '                     <td width="80%" align="center"><strong>FACTORES DE EVALUACIÓN</strong></td>'
                ht += '                     <td width="80%" align="center"><strong>RESPUESTAS</strong></td>'
                ht += '                 </tr>'

                $(response.data_preguntas).each(function (i, data) {
                    ht += '                 <tr>'
                    if (data.categoria == 1) {
                        ht += '                     <td width="100%" colspan="2"><strong>CANTIDAD DE TRABAJO<strong></td>'
                    } else if (data.categoria == 2) {
                        ht += '                     <td width="100%" colspan="2"><strong>CALIDAD DE TRABAJO<strong></td>'
                    } else if (data.categoria == 3) {
                        ht += '                     <td width="100%" colspan="2"><strong>SEGURIDAD<strong></td>'
                    } else if (data.categoria == 4) {
                        ht += '                     <td width="100%" colspan="2"><strong>RESPONSABILIDAD<strong></td>'
                    } else if (data.categoria == 5) {
                        ht += '                     <td width="100%" colspan="2"><strong>ACTITUD<strong></td>'
                    }
                    ht += '                 </tr>'
                    var array_preguntas_categorias = data.preguntas_categoria;
                    $(array_preguntas_categorias).each(function (i, data) {
                        ht += '                 <tr>'
                        ht += '                     <td width="80%"><input type="hidden" id="txt-pregunta-' + data.pre_id + '" value="' + data.pre_id + '" class="pregunta  form-control box-sha"  placeholder="Ingrese Tematica"  type="text">' + data.pre_pregunta + '</td>'
                        ht += '                     <td width="20%">'
                        ht += '                         <select name="select-respuesta-pregunta" id="select-respuesta-pregunta-' + data.pre_id + '" class="form-control txt-respuesta-pregunta">'
                        ht += '                             <option data-bs-toggle="tooltip" data-bs-original-title="Tooltip on the bottom" value="1">Necesita Mejorar (No satisface los requerimientos)</option>'
                        ht += '                             <option data-bs-toggle="tooltip" data-bs-original-title="Tooltip on the bottom" value="2">Satisfactorio (Cumple con las expectativas)</option>'
                        ht += '                             <option data-bs-toggle="tooltip" data-bs-original-title="Tooltip on the bottom" value="3">Muy Satisfactorio (Supera las expectativas)</option>'
                        ht += '                         </select>'
                        ht += '                     </td>'
                        ht += '                 </tr>'
                    })
                })

                ht += '             </table>'

                ht += '         <div class="text-wrap">'
                ht += '             <div class="panel panel-primary tabs-style-2">'
                ht += '                 <div class="btn-ri col-md-12 cen ubica">'
                ht += '                     <span class="read-more background-btn-nuevo">'
                ht += '                         <a class="btn background-btn-nuevo pad-nu float-btn-nuevo ma-to" id="btn-guardar-evaluacion">'
                ht += '                         <i class="fa fa-save color-btn-nuevo"></i>'
                ht += '                         <strong class="color-btn-nuevo">Finalizar</strong>'
                ht += '                         </a>'
                ht += '                     </span>'
                ht += '                 </div>'
                ht += '             </div>'
                ht += '         </div>'
                ht += '     </div>'
                ht += ' </div>'
                ht += '</div>'

                $("#div-empleado").html(ht)

                /*INICIO DEL CLICK PARA LLAMAR A FUNCION DEL BOTON GUARDAR EVALUACION */
                $("#btn-guardar-evaluacion").click(function () {
                    $("#btn-guardar-evaluacion").html("<span class='spinner-border spinner-border-sm margin-spiner color-btn-nuevo' role='status' aria-hidden='true'></span><span class='color-btn-nuevo'> Guardando..</span>")
                    $("#global-loader").addClass("block");
                    $("#global-loader").removeClass("none");
                    guardar_evaluacion(id_evaluador, id_evaluado)
                })
                /*FIN DEL CLICK PARA LLAMAR A FUNCION DEL BOTON GUARDAR EVALUACION*/
                $("#div-busqueda-empleado").html('')

            }
            $("#global-loader").removeClass("block");
            $("#global-loader").addClass("none");
            $("#cont_preload").hide();

            $("#div-busqueda-empleado").html('')
        }
    }).fail(function (jqXHR, textStatus, errorThrown) {
        if (jqXHR.status === 0) {
            alert('Not connect: Verify Network.');
        } else if (jqXHR.status == 404) {
            alert('Requested page not found [404]');
        } else if (jqXHR.status == 500) {
            alert('Internal Server Error [500]. Intente nuevamente');
        } else if (textStatus === 'timeout') {
            alert('Time out error.');
        } else if (textStatus === 'abort') {
            alert('Ajax request aborted.');
        }
    });
}
/*FIN PARA FUNCION CONSULTAR EMPLEADO POR ID*/



/*INICIO FUNCION PARA GUARDAR EVALUACION DE DESEMPEÑO */
function guardar_evaluacion(id_evaluador, id_evaluado) {
    var token = $("#csrf-token").val();

    //recorre la tabla para obtener los id de cada fila
    var txt_preguntas = [];
    cont = 0
    $(".pregunta").each(function () {
        txt_preguntas.push($(this).attr("id"));
        cont = cont + 1
    });
    console.log(txt_preguntas.join(", "));
    console.log(cont)
    console.log(txt_preguntas)

    var array_preguntas = [];
    for (var x = 0; x <= cont - 1; x++) {
        var array = {
            'id_pregunta': $('#' + txt_preguntas[x]).val(),
            'id_pregunta_respuesta': $('#select-respuesta-pregunta-' + $('#' + txt_preguntas[x]).val()).val(),
        }
        array_preguntas.push(array);
    }// fin del for
    var array_preguntas_respuestas = JSON.stringify(array_preguntas);
    console.log("json= " + array_preguntas_respuestas)

    $.ajax({
        url: '/registrar-evaluacion',
        type: 'POST',
        dataType: 'json',
        headers: { 'X-CSRF-TOKEN': token },
        data: { json_preguntas: array_preguntas_respuestas, id_evaluador: id_evaluador, id_evaluado: id_evaluado },
        success: function (response) {
            console.log(response)
            if (response.respuesta == 'true') {
                $("#btn-guardar-evaluacion").html('<strong class="color-btn-nuevo"><i class="fa fa-save color-btn-nuevo"></i> Finalizar</strong>')
                location.href = "/evaluacion-empleado";
                $("#global-loader").removeClass("block");
                $("#global-loader").addClass("none");
                Swal.fire(
                    'Buen Trabajo!',
                    'Evaluación se registro correctamente',
                    'success'
                )
            }
        }
    }).fail(function (jqXHR, textStatus, errorThrown) {
        if (jqXHR.status === 0) {
            alert('Not connect: Verify Network.');
        } else if (jqXHR.status == 404) {
            alert('Requested page not found [404]');
        } else if (jqXHR.status == 500) {
            alert('Internal Server Error [500]. Intente nuevamente');
        } else if (textStatus === 'timeout') {
            alert('Time out error.');
        } else if (textStatus === 'abort') {
            alert('Ajax request aborted.');
        }
    });
}
/*FIN FUNCION PARA GUARDAR GUARDAR EVALUACION DE DESEMPEÑO */