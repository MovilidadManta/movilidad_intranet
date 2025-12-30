@if (Session::get('nombres'))
@extends('Layout.app_index')
@section('css')
<script src="
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
                            <a href="#" tabindex="-1" class="btn btn-primary disabled placeholder col-4" aria-hidden="true"></a>
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
                            <a href="#" tabindex="-1" class="btn btn-primary disabled placeholder col-4" aria-hidden="true"></a>
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
                            <a href="#" tabindex="-1" class="btn btn-primary disabled placeholder col-4" aria-hidden="true"></a>
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
                            <a href="#" tabindex="-1" class="btn btn-primary disabled placeholder col-4" aria-hidden="true"></a>
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
                                    <a href="#" tabindex="-1" class="btn btn-primary disabled placeholder col-4" aria-hidden="true"></a>
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
                <div class="table-responsive">
                    <table class="table table-vcenter table-mobile-md card-table">
                        <thead>
                            <tr>
                                <th>Solicitante</th>
                                <th>Tipo Permiso</th>
                                <th>Fecha</th>
                                <th>Observacion</th>
                                <th>Documentos</th>
                                <th>Formulario</th>
                                <th class="w-1"></th>
                            </tr>
                        </thead>
                        <tbody id="tbl_permisos">
                            @foreach ($permisos as $p)
                            <tr>
                                <td data-label="Name">
                                    <div class="d-flex py-1 align-items-center">
                                        <span class="avatar me-2" style="background-image: url('/imagenes_empleados/{{ $p->id_empleado }}.jpeg')"></span>
                                        <div class="flex-fill">
                                            <div class="font-weight-medium">{{ $p->empleado }}</div>
                                        </div>
                                    </div>
                                </td>
                                <td data-label="Title">
                                    <div>{{ $p->tipo_permiso }}</div>
                                </td>
                                <td class="text-secondary" data-label="Role">
                                    <div>{{ $p->fecha_inicio }} - {{ $p->fecha_final }}</div>
                                    <div>{{ $p->hora_inicio }} - {{ $p->hora_final }}</div>
                                </td>
                                <td>
                                    <p>{{ $p->observacion }}</p>
                                </td>
                                <td>
                                    @if ($p->documento)
                                    <a href="javascript:void(0)" onclick="descargar_archivo_permiso('{{ $p->documento }}')">
                                        <i class="fa-solid fa-file-pdf"></i>
                                        <span>ver</span>
                                    </a>
                                    @else
                                    @endif
                                </td>
                                <td>
                                    @if ($p->formulario)
                                    <a href="javascript:void(0)" onclick="descargar_archivo_permiso('{{ $p->formulario }}')">
                                        <i class="fa-solid fa-file-pdf"></i>
                                        <span>ver</span>
                                    </a>
                                    @else
                                    @endif
                                </td>
                                <td>
                                    <div class="btn-list flex-nowrap">
                                        <button id="btn_apro-{{ $p->id }}" onclick="f_permiso({{ $p->id }},1,0)" class="btn btn-primary w-100">
                                            Aprobar
                                        </button>
                                        <button id="btn_recha" onclick="f_permiso({{ $p->id }},2,1)" class="btn btn-danger w-100">
                                            Rechazar
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal modal-blur fade" id="modal_aprobar_code" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
        <div class="modal-content">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            <div class="modal-status bg-success"></div>
            <div class="modal-body text-center py-4">
                <div class="mb-3">
                    <label class="form-label">Codigo de autorización</label>
                    <p>Por favor revise su correo institucional el código de autorización</p>
                    <input type="text" class="form-control" id="ip_codigo_a" placeholder="Escriba su código de autorización">
                    <input type="hidden" id="id_permiso">
                </div>
            </div>
            <div class="modal-footer">
                <div class="w-100">
                    <div class="row">

                        <div class="col"><button class="btn btn-success w-100" id="btn_ap_firma" onclick="aprobar_firma()">
                                Estampar código
                            </button></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal modal-blur fade" id="modal_error" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
        <div class="modal-content">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            <div class="modal-status bg-danger"></div>
            <div class="modal-body text-center py-4">
                <!-- Download SVG icon from http://tabler-icons.io/i/alert-triangle -->
                <svg xmlns="http://www.w3.org/2000/svg" class="icon mb-2 text-danger icon-lg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M10.24 3.957l-8.422 14.06a1.989 1.989 0 0 0 1.7 2.983h16.845a1.989 1.989 0 0 0 1.7 -2.983l-8.423 -14.06a1.989 1.989 0 0 0 -3.4 0z" />
                    <path d="M12 9v4" />
                    <path d="M12 17h.01" />
                </svg>
                <h3>Are you sure?</h3>
                <div class="text-secondary">Do you really want to remove 84 files? What you've done cannot be
                    undone.</div>
            </div>
            <div class="modal-footer">
                <div class="w-100">
                    <div class="row">
                        <div class="col"><a href="#" class="btn w-100" data-bs-dismiss="modal">
                                Cancel
                            </a></div>
                        <div class="col"><a href="#" class="btn btn-danger w-100" data-bs-dismiss="modal">
                                Delete 84 items
                            </a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="modal modal-blur fade" id="modal_rechazar_permiso" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
        <div class="modal-content">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            <div class="modal-status bg-danger"></div>
            <div class="modal-body text-center py-4">
                <!-- Download SVG icon from http://tabler-icons.io/i/alert-triangle -->
                <svg xmlns="http://www.w3.org/2000/svg" class="icon mb-2 text-danger icon-lg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M10.24 3.957l-8.422 14.06a1.989 1.989 0 0 0 1.7 2.983h16.845a1.989 1.989 0 0 0 1.7 -2.983l-8.423 -14.06a1.989 1.989 0 0 0 -3.4 0z" />
                    <path d="M12 9v4" />
                    <path d="M12 17h.01" />
                </svg>
                <h3>Esta seguro?</h3>
                <div class="text-secondary">Para rechazar es obligatorio escribir una observacion.</div>
                <textarea class="form-control" id="txt_observacion_rechazo" rows="4"></textarea>
            </div>
            <div class="modal-footer">
                <div class="w-100">
                    <div class="row">
                        <div class="col"><a href="#" class="btn w-100" id="btn_c_rechazar">
                                Cancel
                            </a></div>
                        <div class="col"><a href="#" id="btn_r_rechazar" class="btn btn-danger w-100">
                                Rechazar
                            </a></div>
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
    let g_datos;
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
            view_calendar()
        }, 1200);
        // --------------------------------------------- //
        // Main Section Loading Animation End
        // --------------------------------------------- //

    });

    function show_modal() {

    }
    /**LOAD FIRMAR DOCUMENTO*/
    function offload_firma() {
        $("#btn_apro").attr('disabled', true);
        let html = '<i class="fa-solid fa-spinner fa-spin"></i><span class="m-l1">Generando código</span>'
        $("#btn_apro").html(html);
    }

    function onload_firma() {
        let html = ' <i class="fa-solid fa-pencil"></i><span class="m-l1">Aprobar</span>'
        $("#btn_apro").html(html);
        $("#btn_apro").removeAttr('disabled');
    }

    function offload_re_per() {
        $("#btn_recha").attr('disabled', true);
        let html = '<i class="fa-solid fa-spinner fa-spin"></i><span class="m-l1">Rechazando permiso</span>'
        $("#btn_recha").html(html);
    }

    function onload_re_per() {
        let html = '<span class="m-l1">Rechazar</span>'
        $("#btn_recha").html(html);
        $("#btn_recha").removeAttr('disabled');
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

    $("#btn_c_rechazar").click(function() {
        $("#modal_rechazar_permiso").modal("hide")
        onload_re_per();
        g_datos = "";

    });

    $("#btn_r_rechazar").click(function() {
        let p = 0;
        let token = $("#csrf-token").val();
        let observacion = $("#txt_observacion_rechazo").val();


        if (observacion == "") {
            alert("Por favor debe ingresar la observación");
            return;
        } else {
            g_datos.observacion = observacion;
            datos = g_datos
            _AJAX_('/permisos_estado', 'POST', token, datos, p);
        }


    });


    function f_permiso(id_permiso, tipo, p) {

        let datos = {
            id_permiso,
            tipo
        }
        let token = $("#csrf-token").val();

        if (p == 0) {
            //btn_apro
            //offload_firma();
            $("#btn_apro-" + id_permiso).attr('disabled', true);
            let html = '<i class="fa-solid fa-spinner fa-spin"></i><span class="m-l1"> Generando código</span>'
            $("#btn_apro-" + id_permiso).html(html);
            _AJAX_('/enviar_codigo', 'POST', token, datos, 2);
        } else {
            //offload_re_per();
            $("#btn_recha-" + id_permiso).attr('disabled', true);
            let html = '<i class="fa-solid fa-spinner fa-spin"></i><span class="m-l1"> Rechazando permiso</span>'
            $("#btn_recha-" + id_permiso).html(html);
            $("#modal_rechazar_permiso").modal("show");
            g_datos = datos;
            //_AJAX_('/permisos_estado', 'POST', token, datos, p);
        }
    }

    const aprobar_firma = () => {
        offload_apfirma();
        let codigo = $("#ip_codigo_a").val();
        let token = $("#csrf-token").val();
        let id_permiso = $("#id_permiso").val();
        if (codigo == '') {
            alert("El campo Codigo de verificacion esta vacio");
        } else if (id_permiso == "") {
            alert("error en el ID del permiso se encuentra vacio el Id permiso")
        } else {
            let datos = {
                codigo,
                id_permiso
            };
            _AJAX_("/estampar_codigo_jefe", "POST", token, datos, 3);
        }
    }


    function descargar_archivo_permiso(ruta) {
        let r = btoa(unescape(encodeURIComponent(ruta)));

        var url = "/descargar_archivo_per/" + r;
        console.log(url);
        var a = document.createElement("a");
        a.target = "_blank";
        a.href = url;
        a.click();
    }

    function view_calendar() {
        // document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');
        var calendar = new FullCalendar.Calendar(calendarEl, {
            //initialView: 'dayGridWeek',
            initialView: 'timeGridWeek',
            nowIndicator: true,
            locale: 'es',
            headerToolbar: {
                left: 'prev,next',
                center: 'title',
                right: 'dayGridWeek,dayGridDay' // user can switch between the two
            },
            events: 'eventos_calendario',
            eventClick: function(info) {
                let edad = parseInt(info.event.extendedProps.edad)
                edad = edad + 1;
                $('#t_nombre').html(info.event.extendedProps.empleado);
                $("#ip_cedula_to").val(info.event.extendedProps.cedula);
                if (info.event.extendedProps.Sexo == "Masculino") {
                    $('#t_nombre').removeClass("girl")
                    $('#t_nombre').addClass("boy")
                } else {
                    $('#t_nombre').removeClass("boy")
                    $('#t_nombre').addClass("girl")
                }
                $('#t_edad').html(edad + " años");
                $("#img_empleado").attr('src', '/imagenes_empleados/' + info.event.extendedProps.cedula +
                    '.jpeg');
                //$("#img_empleado").attr('src', './imagenes_empleados/1313930545.jpeg');
                // $("#t_cedula").val(info.event.extendedProps.cedula)
                // $('#t_cargo').html(info.event.extendedProps.cargo);
                $("#txt_mensaje").val("");
                // $('#modal-report').modal('show');
            }
        });
        calendar.render();
        //});

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
                        if (res.res) {
                            alert("Se " + res.sms + " el permiso")
                        }
                        _AJAX_('/get_permisos', 'GET', '', '', 0)
                        $("#txt_observacion_rechazo").val("");
                        $("#modal_rechazar_permiso").modal("hide");

                    } else if (p == 1) {
                        if (res.res) {
                            alert("Se " + res.sms + " el permiso")
                        }
                        onload_re_per();
                        _AJAX_('/get_permisos', 'GET', '', '', 0)
                    } else if (p == 2) {
                        if (res.res) {
                            $("#id_permiso").val(res.id_permiso);
                            $("#modal_aprobar_code").modal("show");
                            onload_firma();
                        } else {
                            onload_firma();
                            $("#modal_error").modal("show");
                        }
                        //console.log(res)
                    } else if (p == 3) {
                        if (res.res) {
                            $("#ip_codigo_a").val("")
                            onload_apfirma();
                            _AJAX_('/get_permisos', 'GET', '', '', 0)
                            $("#modal_aprobar_code").modal("hide");
                        } else {
                            onload_apfirma();

                            alert("el codigo de error es incorrecto")
                            $("#ip_codigo_a").focus();
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
        } else if (tipo == 'GET') {
            $.ajax({
                url: ruta,
                type: tipo,
                dataType: "json",
                success: function(res) {
                    if (p == 0) {
                        if (res.res) {
                            let thtml = '';
                            $(res.data).each(function(i, data) {
                                let foto = "'" + '/imagenes_empleados/' + data.id_empleado +
                                    '.jpeg' + "'"
                                thtml +=
                                    ' <tr><td data-label="Name"><div class="d-flex py-1 align-items-center">'
                                thtml +=
                                    ' <span class="avatar me-2" style="background-image: url(' +
                                    foto + ')"></span>'
                                thtml += '<div class="flex-fill"><div class="font-weight-medium">' +
                                    data.empleado + '</div>'
                                thtml += '</div></div></td><td data-label="Title"><div>' + data
                                    .tipo_permiso +
                                    '</div></td><td class="text-secondary" data-label="Role">'
                                thtml += '<div>' + data.fecha_inicio + ' - ' + data.fecha_final +
                                    '</div>'
                                thtml += '<div>' + data.hora_inicio + ' - ' + data.hora_final +
                                    '</div></td>'
                                thtml += '<td><p>' + data.observacion + '</p></td>'
                                thtml += '<td>';

                                if (data.documento) {
                                    thtml +=
                                        '<a href="javascript:void(0)" onclick="descargar_archivo_permiso(' +
                                        data.documento +
                                        ')"><i class="fa-solid fa-file-pdf"></i><span>ver</span></a>'
                                }
                                thtml += '</td>'
                                thtml += '<td>';

                                if (data.formulario) {
                                    thtml +=
                                        '<a href="javascript:void(0)" onclick="descargar_archivo_permiso(' +
                                        data.formulario +
                                        ')"><i class="fa-solid fa-file-pdf"></i><span>ver</span></a>'
                                }
                                thtml += '</td>'
                                thtml +=
                                    '<td><div class="btn-list flex-nowrap"><button  id="btn_apro" onclick="f_permiso(' +
                                    data.id +
                                    ',1,0)" class="btn btn-primary w-100">Aprobar</button>'
                                thtml += '<button id="btn_recha" onclick="f_permiso(' + data.id +
                                    ',2,1)" class="btn btn-danger w-100">Rechazar</button>'
                                thtml += '  </div></td></tr>'
                            })
                            $("#tbl_permisos").html(thtml);
                        } else {
                            $("#tbl_permisos").html("");

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
        }
    }
</script>
@endsection
@else
<script>
    location.href = "/";
</script>


@endif