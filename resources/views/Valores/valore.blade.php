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

.ma_p {
    margin: 0 !important;
    margin-left: 0.5em !important;
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
            <div class="row g-2 align-items-center">
                <div class="col">
                    <h2 class="page-title">
                        Misión, Visión y Valores
                    </h2>
                </div>

            </div>
            <div class="row">
                <div class="col-md-12 col-lg-12">
                    <div class="card">
                        <div class="card-status-start bg-primary"></div>
                        <div class="card-body">
                            <h3 class="card-title">Misión</h3>
                            <p class="text-muted">
                                <!--<div class="flex">
                                <i class="fa-solid fa-phone"></i>
                                <p class="ma_p">102</p>
                            </div>-->
                            <div class="flex">
                                <!--<i class="fa-solid fa-user"></i>-->
                                <p class="ma_p"> Trabajar por un sistema de movilidad eficiente, eficaz y responsable en
                                    el Cantón Manta, de manera sostenible y sustentable, mediante la gestión,
                                    administración, regulación y control del tránsito, transporte terrestre, movilidad
                                    no motorizada e infraestructura comercial, primando el buen servicio, precautelando
                                    el bienestar, la vida y la salud de la ciudadanía.</p>
                            </div>
                            </ul>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-12">
                    <div class="card">
                        <div class="card-status-start bg-primary"></div>
                        <div class="card-body">
                            <h3 class="card-title">Visión</h3>
                            <p class="text-muted">
                                <!--<div class="flex">
                                <i class="fa-solid fa-phone"></i>
                                <p class="ma_p">102</p>
                            </div>-->
                            <div class="flex">
                                <!--<i class="fa-solid fa-user"></i>-->
                                <p class="ma_p"> Ser una Empresa que genere una cultura de convivencia permanente entre
                                    la movilidad motorizada y la movilidad no motorizada, contando con Talento Humano
                                    motivado y comprometido respaldado con el apoyo de procesos rentables en el ámbito
                                    empresarial y tecnológico, para que así, se contribuya a la mejora de la calidad de
                                    vida de la ciudadanía, a su bienestar, al ordenamiento y desarrollo territorial del
                                    Cantón Manta.</p>
                            </div>
                            </ul>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-12">
                    <div class="card">
                        <div class="card-status-start bg-primary"></div>
                        <div class="card-body">
                            <h3 class="card-title">Valores </h3>
                            <p class="text-muted">Artículo 4.- Valores: El personal de todos los niveles administrativos
                                y operativos del cuerpo social de la Empresa Pública Municipal Movilidad de
                                Manta-EP, se caracterizará por desarrollar sus actividades bajo los
                                siguientes
                                valores:
                                <!--<div class="flex">
                                <i class="fa-solid fa-phone"></i>
                                <p class="ma_p">102</p>
                            </div>-->
                            <div class="flex">
                                <!--<i class="fa-solid fa-user"></i>-->

                                <p class="ma_p">
                                <table>
                                    <tr>
                                        <td>
                                            
                                        </td>
                                        <td>
                                            Apertura al cambio.
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            
                                        </td>
                                        <td>
                                            Compromiso.

                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            
                                        </td>
                                        <td>
                                            Equidad.

                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            
                                        </td>
                                        <td>
                                            Transparencia.

                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            
                                        </td>
                                        <td>
                                            Orientación al servicio.

                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            
                                        </td>
                                        <td>
                                            Capacidad y Excelencia para la prestación de un servicio integral e
                                            integrado.

                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            
                                        </td>
                                        <td>
                                            Vocación de trabajo en equipo.
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            
                                        </td>
                                        <td>
                                            Respeto y Amabilidad en la relación con el cliente usuario.
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            
                                        </td>
                                        <td>
                                            Conciencia del empoderamiento de la responsabilidad ambiental.
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            
                                        </td>
                                        <td>
                                            Responsabilidad social.
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            
                                        </td>
                                        <td>
                                            Tolerancia.
                                        </td>
                                    </tr>

                                </table>
                                </p>
                            </div>
                            </ul>
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

@endsection

@section('js')
<script>
$(window).on("load", function() {


    "use strict";

    setTimeout(function() {
        //$(".loader").addClass('loaded');
        $("#cont_preload").hide();
        $("#cont_calendar").show();
        view_calendar()
    }, 1200);

});

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
</script>

@endsection
@else
<script>
location.href = "/";
</script>


@endif