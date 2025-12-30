@extends('Layout.app_index')
@section('css')
    <!-- CSS -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/index.global.min.js"></script>
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

        #ui_notifIt {
            position: fixed;
            top: 10px;
            right: 10px;
            cursor: pointer;
            overflow: hidden;
            -webkit-box-shadow: 0px 3px 5px rgba(0, 0, 0, 0.3);
            -moz-box-shadow: 0px 3px 5px rgba(0, 0, 0, 0.3);
            -o-box-shadow: 0px 3px 5px rgba(0, 0, 0, 0.3);
            box-shadow: 0px 3px 5px rgba(0, 0, 0, 0.3);
            -wekbit-border-radius: 5px;
            -moz-border-radius: 5px;
            -o-border-radius: 5px;
            border-radius: 5px;
            z-index: 2000;
        }

        #ui_notifIt:hover {
            opacity: 1 !important;
        }

        #ui_notifIt p {
            text-align: center;
            font-size: 14px;
            padding: 0;
            margin: 0;
            padding: 10px;
            font-weight: 400;
            text-transform: capitalize;
        }

        #ui_notifIt p i {
            font-size: 20px;
        }

        #notifIt_close {
            position: absolute;
            color: #fff;
            top: 0;
            padding: 0px 5px;
            right: 0;
        }

        #notifIt_close:hover {
            background-color: rgba(255, 255, 255, 0.3);
        }

        /* Color setup */
        /* You are free to change all of this */
        #ui_notifIt.success {
            background-color: #3bb001;
            color: white;
        }

        #ui_notifIt.error {
            background-color: #dc3545;
            color: white;
        }

        #ui_notifIt.warning {
            background-color: #ffc107;
        }

        #ui_notifIt.info {
            background-color: #3db4ec;
            color: white;
        }

        #ui_notifIt.default {
            background-color: #efeff5;
        }

        #ui_notifIt.primary {
            background-color: var(--primary-bg-color);
            color: #fff;
        }

        #ui_notifIt.dark {
            background-color: #4b4261;
            color: #fff;
        }

        /* notifit confirm */
        .notifit_confirm_bg,
        .notifit_prompt_bg {
            position: fixed;
            top: 0;
            left: 0;
            height: 100%;
            width: 100%;
            background-color: rgba(255, 255, 255, 0.8);
        }

        .notifit_confirm,
        .notifit_prompt {
            position: fixed;
            top: 0;
            left: 0;
            padding: 30px;
            background-color: #fff;
            border: 1px solid rgba(0, 0, 0, 0.1);
            border-radius: 1px;
            -webkit-box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.2);
            box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.2);
            z-index: 9999;
        }

        .notifit_confirm_accept,
        .notifit_confirm_cancel,
        .notifit_prompt_accept,
        .notifit_prompt_cancel {
            display: inline-block;
            font-weight: 400;
            color: #160248;
            text-align: center;
            vertical-align: middle;
            user-select: none;
            background-color: transparent;
            border: 1px solid transparent;
            padding: 0.375rem 0.75rem;
            font-size: 0.875rem;
            line-height: 1.5;
            border-radius: 0;
            margin-right: 5px;
            transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        }

        .notifit_prompt_accept:hover,
        .notifit_prompt_cancel:hover {
            background-color: #666;
        }

        .notifit_confirm_accept {
            background-color: #3bb001;
            color: #fff;
        }

        .notifit_confirm_cancel {
            background-color: #dc3545;
            color: #fff;
        }

        .notifit_confirm_message {
            text-align: center;
            margin-bottom: 20px;
            font-size: 14px;
        }

        .notifit_prompt_message {
            color: #444;
            margin-top: 0;
            text-align: center;
        }

        .notifit_prompt_input {
            text-align: center;
            font-size: 14px;
            width: 100%;
            padding: 10px;
            outline: none;
            border: 1px solid #aaa;
            color: #444;
            -webkit-border-radius: 5px;
            -moz-border-radius: 5px;
            -ms-border-radius: 5px;
            -o-border-radius: 5px;
            border-radius: 5px;
        }

        .notifit_prompt {
            text-align: center;
        }

        #ui_notifIt.info {
            margin: 0 auto;
            right: 10px !important;
            left: 10px !important;
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
                <div class="row row-sm">
                    <div class="col-lg-6 col-xl-6 col-md-12 col-sm-12">
                        <div class="card  box-shadow-0">
                            <div class="card-header flex-direct-colum">
                                <h4 class="card-title mb-1">Cambio de contraseña</h4>
                                <p class="mb-2">El cambio de contraseña es bajo su responsabilidad.</p>
                            </div>
                            <div class="card-body pt-0">
                                <div class="form-horizontal">
                                    <div class="mb-3">
                                        <label class="form-label">Contraseña actual</label>
                                        <input type="password" class="form-control" id="ip_pass"
                                            placeholder="Contraseña actual">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Nueva Contraseña</label>
                                        <input type="password" class="form-control" id="ip_newpass"
                                            placeholder="Nueva Contraseña">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Confirmar Contraseña</label>
                                        <input type="password" class="form-control" id="ip_conpass"
                                            placeholder="Confirmar Contraseña">
                                    </div>

                                    <div class="form-group mb-0 mt-3 justify-content-end">
                                        <div>
                                            <button type="button" id="btn_cambiar"
                                                class="btn btn-primary">Cambiar</button>
                                            <a href="/home" class="btn btn-secondary ms-4">Cancelar</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal modal-blur fade" id="modal_ok" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
            <div class="modal-content">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="modal-status bg-success"></div>
                <div class="modal-body text-center py-4">
                    <!-- Download SVG icon from http://tabler-icons.io/i/circle-check -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon mb-2 text-green icon-lg" width="24"
                        height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />
                        <path d="M9 12l2 2l4 -4" />
                    </svg>
                    <h3>Su contraseña ha sido cambiada de manera exitosa!</h3>
                </div>
                <div class="modal-footer">
                    <div class="w-100">
                        <div class="row">

                            <div class="col"><a href="#" class="btn btn-success w-100"
                                    onclick="cerrar_modal_per()">
                                    Aceptar
                                </a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script src="{{ asset('/js/Login/reset.js') }}"></script>
    <!-- JavaScript -->
    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>


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
