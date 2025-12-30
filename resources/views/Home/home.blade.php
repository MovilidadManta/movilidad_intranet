@extends('Layout.app_index')
@section('css')
<style>
.s_img {
    width: 2.2em;
}

.flex {
    display: flex;
}

.fd-row {
    flex-direction: row;
}

.alig-center {
    align-items: center;
}

.mrg_r_1 {
    margin-right: 1em;
}

.is-today {
    background: #9ac7ed;
}
.btn{
    display: block;
}
#btn_marcacion_historial{
    margin-top: 5px;
}
.camera_video{
    width: 100%
}
.oculto{
    display: none !important;
}
.modal-full{
    max-width: 90%;
}
.color-th{
    background-color: transparent !important;
}
.table-responsive{
    margin-top: 10px;
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

@php
$cont = 0;
$cumpless = [];
$dia = date('Y-m-d');
$anio = date('Y');
@endphp
@foreach ($cumples as $c)
@php
$e = explode('-', $c->start);
$dato = $anio . '-' . $e[1] . '-' . $e[2];
@endphp
@if ($dato == $dia)
<?php $cont++;
                $cumpless[] = ['nombre' => $c->title, 'sexo' => $c->sexo, 'cedula' => $c->cedula, 'fecha_naci' => $dato, 'edad' => $c->edad];
                ?>
@endif
@endforeach

@if ($isCumple)
<div class="c_cumple  animate__animated animate__fadeIn " id="cont_cumpleaños">
    <div class="btn_cerrar esquinar" onclick="cerrar_cumple();">

        <span class="c">x</span>
    </div>
    <div>
        <img src="{{ asset('img/cerpentinas.gif') }}" alt="" style="width: 100%;">
    </div>
    <div class="pos_abso">
        <h1 style="Margin:0;line-height:36px;mso-line-height-rule:exactly;font-family:lato, 'helvetica neue', helvetica, arial, sans-serif;font-size:30px;font-style:normal;font-weight:bold;color:#2196F3;text-align:center"
            class="b_title animate__animated animate__tada animate__infinite ">
            Feliz Cumpleaños!<br>{{ Session::get('nombres') }} <strong> <br>Movilidad EP te desea un excelente
                día</strong>!</h1>
    </div>
    <div class="pos_abso">
        <img src="{{ asset('img/pastel.png') }}" class="im_pastel  animate__animated  animate__lightSpeedInRight"
            alt="">
    </div>
</div>
@endif
<div class="container-xl">
    <div class="row g-4">
        <div class="col-md-3">
            @if ($cont == 0)
            @elseif($cont > 0)
            <div class="card">
                <div class="ribbon bg-red">HOY</div>
                <div class="card-body">
                    <h3 class="card-title">Cumpleaños</h3>
                    @foreach ($cumpless as $cc)
                    <div class="flex fd-row">
                        <div class="flex alig-center mrg_r_1">
                            <img src="{{ asset('img/caja_regalo.png') }}" class="s_img" alt="">
                        </div>
                        <div>
                            @php
                            $empleado = '"' . $cc['nombre'] . '"';
                            $sexo = '"' . $cc['sexo'] . '"';
                            @endphp
                            <a href="javascript:void(0);"
                                onclick="enviar_m({{ $empleado }}, {{ $cc['cedula'] }}, {{ $sexo }}, {{ $cc['edad'] }})">
                                <span>Hoy es el cumpleaños de
                                    <strong>{{ $cc['nombre'] }}</strong></span></a>
                        </div>
                    </div>
                    @endforeach
                    <div class="flex alig-center">
                        <a href="/cumpleaños">ver mas..</a>
                    </div>
                </div>
            </div>
            @elseif($cont > 2)
            <div class="card">
                <div class="ribbon bg-red">HOY</div>
                <div class="card-body">
                    <h3 class="card-title">Cumpleaños</h3>
                    <div class="flex fd-row">
                        <div class="flex alig-center mrg_r_1">
                            <img src="{{ asset('img/caja_regalo.png') }}" class="s_img" alt="">
                        </div>
                        <div>
                            <span>Hoy hay <a href="/cumpleaños"><strong>{{ $cont }}
                                        Cumpleaños</strong></a></span>
                        </div>
                    </div>
                </div>
            </div>
            @endif
            @if ($renderButtonMarcacion)
            <div class="card">
                <div class="card-body">
                    <button id="btn_marcacion_remoto" class="btn btn-flickr w-100">
                        Realizar Marcación <i class="fa fa-thumb-tack"></i>
                    </button>
                    <button id="btn_marcacion_historial" class="btn btn-success w-100">
                        Historial Marcaciones <i class="fa fa-history"></i>
                    </button>
                </div>
            </div>
            @endif
            <div class="card">
                <div class="card-body">
                    <span style="display: flex;    justify-content: center;">
                        <p class="reloj" id="reloj"></p>
                    </span>
                </div>
            </div>
            <div class="card">
                <div class="ribbon bg-green">Sitio</div>
                <div class="card-body p-4 text-center">
                    <span class="avatar avatar-xl mb-3 rounded" style="background-image: url(./img/logo1.jpg)"></span>
                    <div class="text-secondary">Movilidad EP</div>
                </div>
                <div class="d-flex">
                    <a href="http://movilidadmanta.gob.ec/" target="_black" class="card-btn">
                        <!-- Download SVG icon from http://tabler-icons.io/i/mail -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-chrome"
                            width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0"></path>
                            <path d="M12 12m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0"></path>
                            <path d="M12 9h8.4"></path>
                            <path d="M14.598 13.5l-4.2 7.275"></path>
                            <path d="M9.402 13.5l-4.2 -7.275"></path>
                        </svg>
                        Web
                    </a>
                </div>
            </div>
            <div class="card">
                <div class="card-body p-4">
                    <span class="codigo">
                        <!-- Búsqueda Google -->
                        <center>
                            <FORM method=GET action="http://www.google.com/search" target="_blank">
                                <img class="lnXdpd" alt="Google" height="92"
                                    src="https://www.google.com/images/branding/googlelogo/1x/googlelogo_color_272x92dp.png"
                                    width="120" data-iml="1688142962114" data-atf="1" data-frt="0"
                                    style="height: 100%;">
                                <INPUT TYPE=text name=q size=31 maxlength=255 value="" style="width: 100%;">
                                <INPUT TYPE=hidden name=hl value=es>
                                <INPUT type=submit name=btnG VALUE="Buscar en Google">
                            </FORM>
                        </center> <!-- Búsqueda Google -->
                    </span>
                </div>
            </div>

        </div>
        <div class="col-md-6">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div id="carousel-indicators-dot" class="carousel slide carousel-fade" data-bs-ride="carousel">
                            <div class="carousel-indicators carousel-indicators-dot">
                                <button type="button" data-bs-target="#carousel-indicators-dot" data-bs-slide-to="0"
                                    class="active"></button>
                                <button type="button" data-bs-target="#carousel-indicators-dot" data-bs-slide-to="1"
                                    class=""></button>
                            </div>
                            <div class="carousel-inner">
                                @foreach ($slider as $s)
                                @if ($loop->first)
                                <div class="carousel-item active">
                                    <img class="d-block w-100" alt=""
                                        src="http://movilidadmanta.gob.ec/imagenes_slider/{{ $s->sl_ruta_foto }}">
                                    <!--<img class="d-block w-100" alt="" src="http://192.168.0.105:8000/imagenes_slider/{{ $s->sl_ruta_foto }}">-->
                                </div>
                                @else
                                <div class="carousel-item">
                                    <img class="d-block w-100" alt=""
                                        src="http://movilidadmanta.gob.ec/imagenes_slider/{{ $s->sl_ruta_foto }}">
                                    <!--<img class="d-block w-100" alt="" src="http://192.168.0.105:8000/imagenes_slider/{{ $s->sl_ruta_foto }}">-->
                                </div>
                                @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Chat institucional <span id="total_user"></span>
                    </div>
                    <div class="card-body">
                        <div id="user_connetion" class="row g-3 content-chat">
                        </div>
                    </div>
                </div>
            </div>
            @if ($permisos != [])
            <div class="col-12">
                <div class="card card-sm">
                    <div class="card-status-top bg-green"></div>
                    <div class="card-body">
                        <h3 class="card-title">Permisos</h3>
                        <div class="divide-y-2 mt-4">
                            <div>
                                <!-- Download SVG icon from http://tabler-icons.io/i/check -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon text-green" width="24" height="24"
                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M5 12l5 5l10 -10"></path>
                                </svg>
                                Tiene {{ sizeof($permisos) }} Permisos por aprobrar <a href="/view/permisos">
                                    ver mas detalles</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endif
            <div class="mb-3">
                <label class="form-label">Calendario</label>
                <div class="datepicker-inline" id="datepicker-inline"></div>
            </div>
            @if ($eventos != [])
            <div class="col-12">
                <div class="card card-sm">
                    <div class="card-status-top bg-green"></div>
                    <div class="card-body">
                        <h3 class="card-title">Eventos</h3>
                        <div class="divide-y-2 mt-4">
                            <div>
                                <!-- Download SVG icon from http://tabler-icons.io/i/check -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon text-green" width="24" height="24"
                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M5 12l5 5l10 -10"></path>
                                </svg>
                                Hay {{ sizeof($eventos) }} eventos <a href="/events"> ver mas detalles</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endif

        </div>


    </div>

    <div class="row">
        <div class="row row-cards">
            <div class="col-sm-6 col-lg-3">
                <div class="card card-sm">
                    <a href="#" class="d-block" style="margin: 2em;">
                        <img src="{{ asset('img/sd-sin-eslogan.png') }}" class="card-img-top">
                    </a>
                    <div class="card-body">
                        <div class="d-flex align-items-center " style="justify-content: center;">
                            <a href="https://portal-sd.securitydata.net.ec/app-security-data/#/dashboard/default">
                                <div>
                                    <div>Security Data</div>
                                    <div class="text-secondary">Firma Electronica</div>
                                </div>
                            </a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<x-marcaciones.modal_agregar_marcacion_empleado_remoto idModalRegistrarEmpleadoRemoto="modal_agregar_marcacion_empleado_remoto">
</x-marcaciones.modal_agregar_marcacion_empleado_remoto>
<x-marcaciones.modal_historial_marcaciones idModalHistorialMarcaciones="modal_historial_marcaciones">
</x-marcaciones.modal_historial_marcaciones>
@endsection

@section('js')
@if ($renderButtonMarcacion)
    <script type='text/javascript' src='/js/marcaciones_empleados_remoto/empleados_remoto.js?v=20250924'></script>
@endif
<script>
$(window).on("load", function() {
    "use strict";
    // GET_mensajes()
    /*setTimeout(function() {
        $("#cont_preload").hide();
        $("#cont_calendar").show();
    }, 1200);*/
});


document.addEventListener("DOMContentLoaded", function() {
    window.Litepicker && (new Litepicker({
        element: document.getElementById('datepicker-inline'),
        buttonText: {
            previousMonth: `<!-- Download SVG icon from http://tabler-icons.io/i/chevron-left -->
    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M15 6l-6 6l6 6" /></svg>`,
            nextMonth: `<!-- Download SVG icon from http://tabler-icons.io/i/chevron-right -->
    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M9 6l6 6l-6 6" /></svg>`,
        },
        inlineMode: true,
    }));
});
</script>
@endsection