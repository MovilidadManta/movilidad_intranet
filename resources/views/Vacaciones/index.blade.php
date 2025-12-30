@if(Session::get('nombres'))
@extends('Layout.app_index')
@section('css')
<script src="
https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/index.global.min.js
"></script>
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
                                    <a href="#" tabindex="-1" class="btn btn-primary disabled placeholder col-4"
                                        aria-hidden="true"></a>
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

<div id="cont_calendar" style="display: none; height: 80vh;" class="container-xl">
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
                                <th>Empleado</th>
                                <th>Periodo</th>
                                <th>Dias</th>
                                <th>Estado</th>
                                <!--<th>:::</th>-->
                            </tr>
                        </thead>
                        <tbody id="tbl_vacaciones">
                            @php
                            $total = 0;
                            @endphp
                            @foreach($vacaciones as $v)
                            <tr>
                                <td data-label="Title">
                                    <div>{{$v->empleado}}</div>
                                </td>
                                <td class="text-secondary" data-label="Role">
                                    <div>{{$v->periodo}} </div>
                                </td>
                                <td>
                                    <p>{{$v->valor}}</p>
                                    @php
                                    $total += $v->valor
                                    @endphp
                                </td>
                                <td>
                                    @if($v->estado==1)
                                    <span class='badge bg-green text-green-fg'>Disponible</span>
                                    @elseif($v->estado==0)
                                    <span class='badge bg-red text-red-fg'>No disponible</span>
                                    @endif
                                </td>
                                <!--<td>
                                    <a href="">
                                        <i class="fa-solid fa-eye"></i>
                                        ver detalle de descuentos
                                    </a>
                                </td>-->
                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <td></td>
                                <td>Total de Días:</td>
                                <td>{{$total}}</td>
                                <td></td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title">Detalle de descuentos a los dias de vacaciones</h3>
                    <ul class="steps steps-vertical">
                        @foreach($detalles_vacaciones as $d)
                        <li class="step-item">
                            <div class="h4 m-0">Se desconto {{$d->valor}} días - {{$d->created_at}}</div>
                            <div class="text-secondary">{{$d->observacion}}</div>
                        </li>
                        @endforeach

                    </ul>
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
        view_calendar()
    }, 1200);
    // --------------------------------------------- //
    // Main Section Loading Animation End
    // --------------------------------------------- //

});

function show_modal() {

}

function f_permiso(id_permiso, tipo, p) {
    let datos = {
        id_permiso,
        tipo
    }
    let token = $("#csrf-token").val();

    _AJAX_('/permisos_estado', 'POST', token, datos, p);
}


function descargar_archivo(ruta) {
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
                } else if (p == 1) {
                    if (res.res) {
                        alert("Se " + res.sms + " el permiso")
                    }
                }
                _AJAX_('/get_permisos', 'GET', '', '', 0)
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
                            let foto = "'" + '/imagenes_empleados/' + data.id_empleado + '.jpeg' +
                                "'"
                            thtml +=
                                ' <tr><td data-label="Name"><div class="d-flex py-1 align-items-center">'
                            thtml += ' <span class="avatar me-2" style="background-image: url(' +
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
                                    '<a href="javascript:void(0)" onclick="descargar_archivo(' +
                                    data.documento +
                                    ')"><i class="fa-solid fa-file-pdf"></i><span>ver</span></a>'
                            }
                            thtml += '</td>'
                            thtml +=
                                '<td><div class="btn-list flex-nowrap"><a href="#" onclick="f_permiso(' +
                                data.id + ',1,0)" class="btn btn-primary w-100">Aprobar</a>'
                            thtml += '<a href="#" onclick="f_permiso(' + data.id +
                                ',2,1)" class="btn btn-danger w-100">Rechazar</a>'
                            thtml += '  </div></td></tr>'
                        })
                        $("#tbl_permisos").html(thtml);
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