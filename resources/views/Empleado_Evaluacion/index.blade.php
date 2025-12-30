@if (Session::get('nombres'))
    @extends('Layout.app_index')
    @section('css')
        <script
            src="
                                                                                                                                                                                                                                https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/index.global.min.js
                                                                                                                                                                                                                                ">
        </script>
        <style>
            .fc .fc-scrollgrid-liquid {
                height: 80vh !important;
            }

            .is-today {
                background: #9ac7ed;
            }

            .m-l1 {
                margin-left: 1em;
            }

            .r_obl {
                color: #F44336;
            }
        </style>
    @endsection

    @section('content')
        <div id="cont_preload">
            <div class="container-xl">
                <div class="row row-cards">
                    <div class="col-3">
                        <div class="card placeholder-glow">
                            <div class="ratio ratio-21x9 card-img-top placeholder"></div>
                            <div class="card-body">
                                <div class="placeholder col-9 mb-3"></div>
                                <div class="placeholder placeholder-xs col-10"></div>
                                <div class="placeholder placeholder-xs col-11"></div>
                                <div class="mt-3">
                                    <a href="#" tabindex="-1" class="btn btn-primary disabled placeholder col-4"
                                        aria-hidden="true"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="card placeholder-glow">
                            <div class="ratio ratio-21x9 card-img-top placeholder"></div>
                            <div class="card-body">
                                <div class="placeholder col-9 mb-3"></div>
                                <div class="placeholder placeholder-xs col-10"></div>
                                <div class="placeholder placeholder-xs col-11"></div>
                                <div class="mt-3">
                                    <a href="#" tabindex="-1" class="btn btn-primary disabled placeholder col-4"
                                        aria-hidden="true"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="card placeholder-glow">
                            <div class="ratio ratio-21x9 card-img-top placeholder"></div>
                            <div class="card-body">
                                <div class="placeholder col-9 mb-3"></div>
                                <div class="placeholder placeholder-xs col-10"></div>
                                <div class="placeholder placeholder-xs col-11"></div>
                                <div class="mt-3">
                                    <a href="#" tabindex="-1" class="btn btn-primary disabled placeholder col-4"
                                        aria-hidden="true"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="card placeholder-glow">
                            <div class="ratio ratio-21x9 card-img-top placeholder"></div>
                            <div class="card-body">
                                <div class="placeholder col-9 mb-3"></div>
                                <div class="placeholder placeholder-xs col-10"></div>
                                <div class="placeholder placeholder-xs col-11"></div>
                                <div class="mt-3">
                                    <a href="#" tabindex="-1" class="btn btn-primary disabled placeholder col-4"
                                        aria-hidden="true"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="row row-cards">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-auto">
                                                <div class="avatar avatar-rounded placeholder"></div>
                                            </div>
                                            <div class="col">
                                                <div class="placeholder placeholder-xs col-9"></div>
                                                <div class="placeholder placeholder-xs col-7"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body py-5 text-center">
                                        <div>
                                            <div class="avatar avatar-rounded avatar-lg placeholder mb-3"></div>
                                        </div>
                                        <div class="mt w-75 mx-auto">
                                            <div class="placeholder col-9 mb-3"></div>
                                            <div class="placeholder placeholder-xs col-10"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="row row-cards">
                            <div class="col-12">
                                <div class="card placeholder-glow">
                                    <div class="ratio ratio-21x9 card-img-top placeholder"></div>
                                    <div class="card-body">
                                        <div class="placeholder col-9 mb-3"></div>
                                        <div class="placeholder placeholder-xs col-10"></div>
                                        <div class="placeholder placeholder-xs col-11"></div>
                                        <div class="mt-3">
                                            <a href="#" tabindex="-1"
                                                class="btn btn-primary disabled placeholder col-4" aria-hidden="true"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="card">
                                    <div class="row g-0 align-items-center placeholder-glow">
                                        <div class="col-3">
                                            <div class="ratio ratio-1x1 card-img-start placeholder"></div>
                                        </div>
                                        <div class="col">
                                            <div class="card-body">
                                                <div class="placeholder col-9 mb-3"></div>
                                                <div class="placeholder placeholder-xs col-10"></div>
                                                <div class="placeholder placeholder-xs col-11"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="row row-cards">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body text-end placeholder-glow">
                                        <div class="placeholder col-9 mb-3"></div>
                                        <div class="placeholder placeholder-xs col-10"></div>
                                        <div class="placeholder placeholder-xs col-12"></div>
                                        <div class="placeholder placeholder-xs col-11"></div>
                                        <div class="placeholder placeholder-xs col-8"></div>
                                        <div class="placeholder placeholder-xs col-10"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="card">
                                    <ul class="list-group list-group-flush placeholder-glow">
                                        <li class="list-group-item">
                                            <div class="row align-items-center">
                                                <div class="col-auto">
                                                    <div class="avatar avatar-rounded placeholder"></div>
                                                </div>
                                                <div class="col-7">
                                                    <div class="placeholder placeholder-xs col-9"></div>
                                                    <div class="placeholder placeholder-xs col-7"></div>
                                                </div>
                                                <div class="col-2 ms-auto text-end">
                                                    <div class="placeholder placeholder-xs col-8"></div>
                                                    <div class="placeholder placeholder-xs col-10"></div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="row align-items-center">
                                                <div class="col-auto">
                                                    <div class="avatar avatar-rounded placeholder"></div>
                                                </div>
                                                <div class="col-7">
                                                    <div class="placeholder placeholder-xs col-9"></div>
                                                    <div class="placeholder placeholder-xs col-7"></div>
                                                </div>
                                                <div class="col-2 ms-auto text-end">
                                                    <div class="placeholder placeholder-xs col-8"></div>
                                                    <div class="placeholder placeholder-xs col-10"></div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="row align-items-center">
                                                <div class="col-auto">
                                                    <div class="avatar avatar-rounded placeholder"></div>
                                                </div>
                                                <div class="col-7">
                                                    <div class="placeholder placeholder-xs col-9"></div>
                                                    <div class="placeholder placeholder-xs col-7"></div>
                                                </div>
                                                <div class="col-2 ms-auto text-end">
                                                    <div class="placeholder placeholder-xs col-8"></div>
                                                    <div class="placeholder placeholder-xs col-10"></div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="row align-items-center">
                                                <div class="col-auto">
                                                    <div class="avatar avatar-rounded placeholder"></div>
                                                </div>
                                                <div class="col-7">
                                                    <div class="placeholder placeholder-xs col-9"></div>
                                                    <div class="placeholder placeholder-xs col-7"></div>
                                                </div>
                                                <div class="col-2 ms-auto text-end">
                                                    <div class="placeholder placeholder-xs col-8"></div>
                                                    <div class="placeholder placeholder-xs col-10"></div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="cont_calendar" style="display: none; height: 80vh;
" class="container-xl">
            <div class="row g-4">
                <div class="col-md-3">
                    <div class="mb-3">
                        <label class="form-label">Calendario</label>
                        <div class="datepicker-inline" id="datepicker-inline"></div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <span style="display: flex;    justify-content: center;">
                                <p class="reloj" id="reloj"></p>
                            </span>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div id="user_connetion" class="row g-3">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div>
                                    <h3>Evaluación de desempeño</h3>
                                    <input type="hidden" id="et_estado_documento">
                                    <input type="hidden" id="et_estado_permisoxhora">
                                    <input type="hidden" id="et_estado_enfermedad">
                                    <div id="c_p_nota" style="display: none;" class="alert alert-warning"
                                        role="alert">
                                        <div class="d-flex">
                                            <div>
                                                <!-- Download SVG icon from http://tabler-icons.io/i/alert-triangle -->
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon alert-icon"
                                                    width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                                    stroke="currentColor" fill="none" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                    <path
                                                        d="M10.24 3.957l-8.422 14.06a1.989 1.989 0 0 0 1.7 2.983h16.845a1.989 1.989 0 0 0 1.7 -2.983l-8.423 -14.06a1.989 1.989 0 0 0 -3.4 0z">
                                                    </path>
                                                    <path d="M12 9v4"></path>
                                                    <path d="M12 17h.01"></path>
                                                </svg>
                                            </div>
                                            <div>
                                                <h4 class="alert-title">Nota:</h4>
                                                <div id="p_nota" class="text-secondary"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Jefe inmediato</label>
                                    <div class="form-control-plaintext">{{ Session::get('nombres') }}
                                        {{ Session::get('apellidos') }}</div>
                                    <input type="hidden" value="{{ Session::get('cedula') }}" id="et_cedula_s">
                                </div>
                                <div class="mb-3">
                                    <div class="row">
                                        @foreach ($empleados_ev as $data)
                                            <div class="col-6">
                                                <div class="card">
                                                    <div class="row row-0">
                                                        <div class="col-3">
                                                            <!-- Photo -->
                                                            <img src="http://192.168.0.105:8001/imagenes_empleados/{{ $data->pic }}.jpeg"
                                                                class="w-100 h-100 object-cover card-img-start"
                                                                alt="pic">
                                                        </div>
                                                        <div class="col">
                                                            <div class="card-body">
                                                                <div class="central-im">
                                                                    <h5 align="center">{{ $data->name }}</h5>
                                                                    <p class="card-text" align="center">
                                                                        {{ $data->title }}
                                                                    </p>
                                                                    <p class="card-text" align="center"><strong
                                                                            align="center">
                                                                            @if ($data->ev_total)
                                                                                <h3 align="center">{{ $data->ev_total }}%
                                                                                </h3>
                                                                            @else
                                                                                <h3 align="center">0%</h3>
                                                                            @endif
                                                                        </strong></p>
                                                                    <div align="center">
                                                                        <span class="read-more">
                                                                            <a class="btn btn-eliminar"
                                                                                href="/evaluar-empleado/{{ $data->pic }}"><i
                                                                                    class="fa fa-trash color-letra"></i><strong>
                                                                                    Eliminar</strong></a>
                                                                        </span>
                                                                        <span class="read-more">
                                                                            <a class="btn btn-noticia"
                                                                                href="/evaluar-empleado/{{ $data->pic }}"><i
                                                                                    class="fa fa-tasks color-letra"></i><strong>
                                                                                    Evaluar</strong></a>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
    @section('js')
        <script src="https: //cdn.jsdelivr.net/npm/fullcalendar@6.1.8/index.global.min.js"></script>
        <script src='https://cdn.jsdelivr.net/npm/@fullcalendar/web-component@6.1.8/index.global.min.js'></script>
        <script src='https://cdn.jsdelivr.net/npm/@fullcalendar/daygrid@6.1.8/index.global.min.js'></script>
        <script src='https://cdn.jsdelivr.net/npm/@fullcalendar/core@6.1.8/locales-all.global.min.js'></script>

        <script>
            document.addEventListener("DOMContentLoaded", function() {
                window.Litepicker && (new Litepicker({
                    element: document.getElementById('datepicker-inline'),
                    buttonText: {
                        previousMonth: `<!-- Download SVG icon from http://tabler-icons.io/i/chevron-left -->
<svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
    <path d="M15 6l-6 6l6 6" />
</svg>`,
                        nextMonth: `<!-- Download SVG icon from http://tabler-icons.io/i/chevron-right -->
<svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
    <path d="M9 6l6 6l-6 6" />
</svg>`,
                    },
                    inlineMode: true,
                }));
            });
            $(window).on("load", function() {


                "use strict";
                // view_calendar()

                // --------------------------------------------- //
                // Loader Start
                // --------------------------------------------- //
                /*setTimeout(function() {
                $(".loader-logo").removeClass('slideInDown').addClass('fadeOutUp');
                $(".loader-caption").removeClass('slideInUp').addClass('fadeOutDown');
                }, 1200);*/
                // --------------------------------------------- //
                // Loader End
                // --------------------------------------------- //

                // --------------------------------------------- //
                // Main Section Loading Animation Start
                // --------------------------------------------- //
                setTimeout(function() {
                    //$(".loader").addClass('loaded');
                    $("#cont_preload").hide();
                    $("#cont_calendar").show();
                }, 1200);
                // --------------------------------------------- //
                // Main Section Loading Animation End
                // --------------------------------------------- //

            });

            function offload_send() {
                $("#btn_enviar_permiso").attr('disabled', true);
                let html = '<i class="fa-solid fa-spinner fa-spin"></i><span class="m-l1">Enviando solicitud</span>'
                $("#btn_enviar_permiso").html(html);
            }

            function onload_send() {
                let html = ' <i class="fa-regular fa-paper-plane"></i><span class="m-l1">Enviar solicitud</span>'
                $("#btn_enviar_permiso").html(html);
                $("#btn_enviar_permiso").removeAttr('disabled');
            }

            const on_load_vista_previa = () => {
                let html = ' <i class="fa-regular fa-paper-plane"></i><span class="m-l1">Vista Previa</span>'
                $("#btn_vista_previa").html(html);
                $("#btn_vista_previa").removeAttr('disabled');
            }

            function offload_vista_previa() {
                $("#btn_vista_previa").attr('disabled', true);
                let html = '<i class="fa-solid fa-spinner fa-spin"></i><span class="m-l1">Generando vista previa</span>'
                $("#btn_vista_previa").html(html);
            }


            /**LOAD FIRMAR DOCUMENTO*/
            function offload_firma() {
                $("#btn_firmar_permiso").attr('disabled', true);
                let html = '<i class="fa-solid fa-spinner fa-spin"></i><span class="m-l1">Generando código</span>'
                $("#btn_firmar_permiso").html(html);
            }

            function onload_firma() {
                let html = ' <i class="fa-solid fa-pencil"></i><span class="m-l1">Firmar Permiso</span>'
                $("#btn_firmar_permiso").html(html);
                $("#btn_firmar_permiso").removeAttr('disabled');
            }
            /**LOAD ESTAMPAR FIRMAR DOCUMENTO*/
            function offload_apfirma() {
                $("#btn_ap_firma").attr('disabled', true);
                let html = '<i class="fa-solid fa-spinner fa-spin"></i><span class="m-l1">Firmando Documento</span>'
                $("#btn_ap_firma").html(html);
            }

            function onload_apfirma() {
                let html = '<span class="m-l1">Estampar código</span>'
                $("#btn_ap_firma").html(html);
                $("#btn_ap_firma").removeAttr('disabled');
            }




            function conf_permiso(sel) {
                let permiso_sel = sel.value
                if (permiso_sel == "") {
                    $("#c_p_nota").hide();
                } else {
                    let permisos = $("#a_permisos").val();
                    permisos = (JSON.parse(permisos))
                    permisos.map(jsd => {
                        if (jsd.id == permiso_sel) {

                            if (jsd.estado_permisoxhora == 1) {
                                $("#c_p_hora").show()
                            } else {
                                $("#c_p_hora").hide()
                            }

                            if (jsd.estado_documento == 1) {
                                $("#c_p_documento").show()
                            } else {
                                $("#c_p_documento").hide()
                            }

                            if (jsd.estado_enfermedad == 1) {
                                $("#c_p_enfermedad").show()
                            } else {
                                $("#c_p_enfermedad").hide()
                            }

                            $("#c_p_nota").show();
                            $("#p_nota").html(jsd.notas);
                            $("#et_estado_documento").val(jsd.estado_documento);
                            $("#et_estado_permisoxhora").val(jsd.estado_permisoxhora);
                            $("#et_estado_enfermedad").val(jsd.estado_enfermedad);

                        }
                    })
                }
            }



            function _AJAX_(ruta, tipo, token, datos, p) {
                if (tipo == "POST") {
                    $.ajax({
                        url: ruta,
                        type: tipo,
                        dataType: "json",
                        headers: {
                            "X-CSRF-TOKEN": token
                        },
                        data: datos,
                        success: function(res) {
                            if (p == 0) {
                                onload_send();
                                if (res.respuesta) {
                                    $("#aprobador").html(res.aprobador);
                                    $("#modal_permiso_ok").modal("show");

                                } else {
                                    if (res.sms == 'sinjefe') {
                                        $("#sms").html(
                                            "Estimado por favor comuniquese al departamento de Talento Humano y comunique que no tiene Jefe asignado"
                                        );
                                        $("#modal-error").modal("show");
                                    }

                                }
                            } else if (p == 1) {
                                on_load_vista_previa();
                                // $("#aprobador").html(res.aprobador);
                                document.querySelector("#vistaPrevia").setAttribute("src", "/storage/" + res.url +
                                    "#toolbar=0&navpanes=0&scrollbar=0");
                                $("#modal_vista_previa").modal("show");
                            } else if (p == 2) {
                                onload_firma()
                                if (res.res) {
                                    let codigo = res.Code
                                    $("#modal_aprobar_code").modal("show");
                                }
                            } else if (p == 3) {
                                if (res.res) {
                                    onload_apfirma();
                                    $("#modal_aprobar_code").modal("hide");
                                    $("#permiso_doc").html(res.u);
                                    $("#ip_url_formulario").val(res.u);
                                    $("#span_documento_firmado").show();
                                } else {
                                    alert("el codigo de autorizacion es incorrecto")
                                }
                            }
                        },
                    }).fail(function(jqXHR, textStatus, errorthrown) {
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
                } else if (tipo == "GET") {
                    $.ajax({
                        url: ruta,
                        type: tipo,
                        dataType: "json",
                        success: function(res) {
                            let html_ = "";
                            if (p == 0) {
                                if (res.respuesta == true) {
                                    var ht = "";
                                    ht +=
                                        '  <table id="table-proyectos" border="2" class="table dataTable no-footer">';
                                    ht += '	    <thead class="background-thead">';
                                    ht += '		    <tr align="center">';
                                    ht +=
                                        '				<th align="center" class="border-bottom-0 color-th">#</th>';
                                    ht +=
                                        '			    <th align="center" class="border-bottom-0 color-th">PROYECTO</th>';
                                    ht +=
                                        '			    <th align="center" class="border-bottom-0 color-th">ESTADO</th>';
                                    ht +=
                                        '			    <th align="center" class="border-bottom-0 color-th">FECHA</th>';
                                    ht +=
                                        '				<th align="center" class="border-bottom-0 color-th">Opciones</th>';
                                    ht += "			</tr>";
                                    ht += "		</thead>";
                                    ht += "		<tbody>";
                                    $(res.data).each(function(i, data) {
                                        let proyecto = "'" + data.pro_nombre + "'";
                                        ht += "			<tr>";
                                        ht +=
                                            '			    <td class="color-td" align="center">' +
                                            data.pro_id +
                                            "</td>";
                                        ht +=
                                            '				<td class="color-td" align="center">' +
                                            data.pro_nombre +
                                            "</td>";
                                        if (data.pro_estado == 1) {
                                            ht +=
                                                '<td class="color-td" align="center"><span class="badge bg-success me-1">Activo</span></td>';
                                        } else {
                                            ht +=
                                                '<td class="color-td" align="center"><span class="badge bg-danger me-1">Inactivo</span></td>';
                                        }
                                        ht +=
                                            '<td class="color-td" align="center">' +
                                            data.pro_fecha +
                                            "</td>";
                                        ht += '<td class="color-td" align="center">';
                                        ht +=
                                            '<button type="button" onclick="modal_editar(' +
                                            data.pro_id +
                                            "," +
                                            proyecto +
                                            "," +
                                            data.pro_estado +
                                            ')" class="tam-btn btn btn-warning btn-modal-editar"><i class="fa fa-edit tam-icono"></i></button>';
                                        ht +=
                                            '              <button type="button" onclick="modal_delete(' +
                                            data.pro_id +
                                            ')" class="tam-btn btn btn-danger btn-modal-eliminar"><i class="fa fa-trash tam-icono"></i></button>';
                                        ht += "			</td></tr>";
                                    });
                                    ht += "		</tbody>";
                                    ht += "  </table>";
                                    $("#div-table-proyectos").html(ht);
                                }
                                $("#table-proyectos").DataTable();
                                $("#global-loader").removeClass("block");
                                $("#global-loader").addClass("none");
                            }
                        },
                    }).fail(function(jqXHR, textStatus, errorthrown) {
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

            function cerrar_modal_per() {
                $("#et_estado_documento").val("");
                $("#et_estado_permisoxhora").val("");
                $("#et_estado_enfermedad").val("");
                $("#et_cedula_s").val("");
                $("#sel_tipo_permiso").val("");
                $("#et_desde").val("");
                $("#et_hasta").val("");
                $("#et_observacion").val("");
                $("#et_h_inicio").val("");
                $("#et_h_final").val("");
                $("#modal_permiso_ok").modal("hide");
            }
        </script>
    @endsection
@else
    <script>
        location.href = "/";
    </script>


@endif
