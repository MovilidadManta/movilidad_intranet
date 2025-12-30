<!doctype html>
<!--
* Movilidad EP -  Manta
* @version 1.0.0
* Copyright 2023 - Movilidad de manta
-->
<html lang="es">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>INTRANET MOVILIDAD EP.</title>
    <meta name="msapplication-TileColor" content />
    <meta name="theme-color" content />
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="mobile-web-app-capable" content="yes" />
    <meta name="Keywords" content="Movilidad EP , Movilidad Manta, Manta, Transito, Intranet, intranet" />
    <meta name="HandheldFriendly" content="True" />
    <meta name="MobileOptimized" content="320" />
    <link rel="icon" href="./favicon.ico" type="image/x-icon" />
    <link rel="shortcut icon" href="./favicon.ico" type="image/x-icon" />
    <!-- CSS files -->
    <link href="{{ asset('tabler/dist/css/tabler.min.css?1685973381') }}" rel="stylesheet" />
    <link href="{{ asset('tabler/dist/css/tabler-flags.min.css?1685973381') }}" rel="stylesheet" />
    <link href="{{ asset('tabler/dist/css/tabler-payments.min.css?1685973381') }}" rel="stylesheet" />
    <link href="{{ asset('tabler/dist/css/tabler-vendors.min.css?1685973381') }}" rel="stylesheet" />
    <link href="{{ asset('tabler/dist/css/demo.min.css?1685973381') }}" rel="stylesheet" />
    <link href="{{ asset('tabler/tabler-icons.min.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <script src="https://kit.fontawesome.com/2afebe029b.js" crossorigin="anonymous"></script>
    <input type="hidden" name="csrf-token" value="{{ csrf_token() }}" id="csrf-token">
    <!-- Begin emoji-picker Stylesheets -->
    <link href="emoji/lib/css/emoji.css" rel="stylesheet">

    <link href="/valex/assets/css/icons.css" rel="stylesheet">

    <link href="/valex/assets/css/datatable/buttons.dataTables.min.css" rel="stylesheet">

    <link href="/valex/assets/css/datatable/datatables.min.css" rel="stylesheet">

    <link href="/valex/assets/css/home.css" rel="stylesheet">
    <link href="{{asset('css/plugins.css')}}" rel="stylesheet" type="text/css" />
    <!-- End emoji-picker Stylesheets -->
    <style>
        @import url('https://rsms.me/inter/inter.css');

        :root {
            --tblr-font-sans-serif: 'Inter Var', -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif;
        }

        body {
            font-feature-settings: "cv03", "cv04", "cv11";
        }

        .reloj {
            font-size: 2em;
            font-family: emoji;
            font-weight: bold;
            margin-bottom: 0;
        }

        .c_cumple {
            width: 99%;
            position: absolute;
            height: 99%;
            background: #e6efffa6;
            z-index: 1222;
            top: 10px;
            left: 10px;
            right: 10px;
        }

        .none_ {
            display: none;
        }

        .im_pastel {
            position: absolute;
            right: 0;
            width: 42em;
        }

        .pos_abso {
            position: absolute;
            top: 96px;
            width: 100%;
            z-index: 10000;
        }

        .btn_cerrar {
            width: 3em;
            height: 3em;
            background: #F44336;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            color: #fff;
        }

        .btn_cerrar:hover {
            cursor: pointer;
        }

        .c {
            display: flex;
            align-self: center;
            font-size: 1.4em;
        }

        .esquinar {
            position: absolute;
            right: 0;
            margin-top: -10px;
            margin-right: -1px;
        }

        .sepertinas {
            background-image: url(img/sepertinas.png);
            background-size: 36em;
            background-repeat: no-repeat;
            background-position-y: -35px;
        }

        .globos {
            background-image: url(img/globos.png);
            background-repeat: no-repeat;
            background-size: 18em;
            background-position: right;
            background-position-x: 510px;
        }

        .sinborder {
            border-bottom: none;
        }

        .f2 {
            font-size: 2rem !important;
        }

        .f1_2 {
            font-size: 1.2rem;
        }

        .girl {
            color: #E91E63;
        }

        .boy {
            color: #1565c0;
        }

        .foto_empleado {
            width: 10em;
            height: 12em;
            position: absolute;
            right: 0;
            margin-right: 24%;
            top: 0;
            margin-top: 6%;
            border-radius: 15%;
            box-shadow: 3px 3px 8px #b9cbdf;
        }

        #chat2 .form-control {
            border-color: transparent;
        }

        #chat2 .form-control:focus {
            border-color: transparent;
            box-shadow: inset 0px 0px 0px 1px transparent;
        }

        .divider:after,
        .divider:before {
            content: "";
            flex: 1;
            height: 1px;
            background: #eee;
        }

        .user_img_chat {
            border-radius: 50%;
            width: 40px;
            height: 40px;
        }

        .mr-l-1 {
            margin-left: 1em;
        }

        .flex {
            display: flex;
        }

        .file-upload {
            width: 2em;
            overflow: hidden;
            position: relative;
        }

        .file-upload input {
            position: absolute;
            height: 400px;
            width: 400px;
            left: -200px;
            top: -200px;
            background: transparent;
            opacity: 0;
            -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";
            filter: alpha(opacity=0);
            cursor: pointer;

        }

        .rosa_ {
            color: #E91E63;
        }

        .verde_n {
            color: #009688;
        }

        .w-30 {
            width: 30em;
        }

        .c_chat {
            text-align: justify !important;
            background-color: #f5f6f7;
            line-height: 1.5;
            max-width: 20em;
        }

        .c_fecha {
            font-size: 0.75em;
            color: #b1b1b1 !important;
        }

        .emoji-menu {
            bottom: 60px !important;
            width: 300px !important;
        }

        .emoji-picker-icon {
            right: 80px !important;

        }

        .car_file {
            background-color: #009688 !important;
            width: 16em;
        }

        .car_file_e {
            background-color: #9E9E9E !important;
            width: 16em;
            color: #fff;
        }

        .flex {
            display: flex;
        }

        .jc_space-around {
            justify-content: space-around;
        }

        .alg_center {
            align-self: center;
        }

        .flex-direct-colum {
            flex-direction: column;
        }

        .icon_descarga {
            color: #fff;
            font-size: 2em;
        }

        .content-chat {
            height: 300px;
            overflow: auto;
        }
    </style>
    @yield('css')

</head>

<body>
    <script src="{{ asset('tabler/dist/js/demo-theme.min.js?1685973381') }}"></script>

    <div class="page">
        <!-- Navbar -->
        <header class="navbar navbar-expand-md d-print-none">
            <div class="container-xl">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-menu"
                    aria-controls="navbar-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <h1 class="navbar-brand navbar-brand-autodark d-none-navbar-horizontal pe-0 pe-md-3">
                    <a href=".">
                        <img src="{{ asset('img/logo.png') }}" width="110" height="32" alt="Tabler"
                            class="navbar-brand-image">
                    </a>
                </h1>
                <div class="navbar-nav flex-row order-md-last">
                    <div class="d-none d-md-flex">
                        <a href="?theme=dark" class="nav-link px-0 hide-theme-dark" title="Enable dark mode"
                            data-bs-toggle="tooltip" data-bs-placement="bottom">
                            <!-- Download SVG icon from http://tabler-icons.io/i/moon -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path
                                    d="M12 3c.132 0 .263 0 .393 0a7.5 7.5 0 0 0 7.92 12.446a9 9 0 1 1 -8.313 -12.454z" />
                            </svg>
                        </a>
                        <a href="?theme=light" class="nav-link px-0 hide-theme-light" title="Enable light mode"
                            data-bs-toggle="tooltip" data-bs-placement="bottom">
                            <!-- Download SVG icon from http://tabler-icons.io/i/sun -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M12 12m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" />
                                <path
                                    d="M3 12h1m8 -9v1m8 8h1m-9 8v1m-6.4 -15.4l.7 .7m12.1 -.7l-.7 .7m0 11.4l.7 .7m-12.1 -.7l-.7 .7" />
                            </svg>
                        </a>
                        <div class="nav-item dropdown d-none d-md-flex me-3">
                            <a href="#" class="nav-link px-0 animate__animated" data-bs-toggle="dropdown" tabindex="-1"
                                aria-label="Show notifications" id="tab_ale">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path
                                        d="M10 5a2 2 0 1 1 4 0a7 7 0 0 1 4 6v3a4 4 0 0 0 2 3h-16a4 4 0 0 0 2 -3v-3a7 7 0 0 1 4 -6" />
                                    <path d="M9 17v1a3 3 0 0 0 6 0v-1" />
                                </svg>
                            </a>
                            <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-end dropdown-menu-card">
                                <div class="card w-30">
                                    <div class="card-header">
                                        <h3 class="card-title">Mis
                                            notificaciones</h3>
                                    </div>
                                    <div class="list-group list-group-flush list-group-hoverable" id="con_mensajes">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link d-flex lh-1 text-reset p-0" data-bs-toggle="dropdown"
                            aria-label="Open user menu">
                            @php
                            $user = strtr(Session::get('nombres'), ' ',
                            '+');
                            @endphp
                            <input type="hidden" id="id_user_" value="{{ Session::get('cedula') }}">
                            <input type="hidden" id="name_" value="{{ Session::get('nombres') }}">
                            <span class="avatar avatar-sm"
                                style="background-image: url(https://ui-avatars.com/api/?name={{ $user }}&background=0D8ABC&color=fff)"></span>
                            <div class="d-none d-xl-block ps-2">
                                <div>{{ Session::get('nombres') }}</div>
                                <div class="mt-1 small text-secondary">{{
                                        Session::get('cargo') }}</div>
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                            <a href="/reset-password" class="dropdown-item">Cambiar contraseña</a>
                            <a href="/cerrar-sesion" class="dropdown-item">Salir</a>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <header class="navbar-expand-md">
            <div class="collapse navbar-collapse" id="navbar-menu">
                <div class="navbar">
                    <div class="container-xl">
                        <ul class="navbar-nav">
                            <li class="nav-item active">
                                <a class="nav-link" href="/">
                                    <span class="nav-link-icon d-md-none d-lg-inline-block">
                                        <!-- Download SVG icon from http://tabler-icons.io/i/home -->
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M5 12l-2 0l9 -9l9 9l-2 0" />
                                            <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" />
                                            <path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6" />
                                        </svg>
                                    </span>
                                    <span class="nav-link-title">
                                        Home
                                    </span>
                                </a>
                            </li>
                            @foreach (json_decode($menus_) as $m)
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#navbar-base" data-bs-toggle="dropdown"
                                    data-bs-auto-close="outside" role="button" aria-expanded="false">
                                    <span class="nav-link-icon d-md-none d-lg-inline-block">
                                        <!-- Download SVG icon from http://tabler-icons.io/i/package -->
                                        <!--<svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M12 3l8 4.5l0 9l-8 4.5l-8 -4.5l0 -9l8 -4.5" />
                                            <path d="M12 12l8 -4.5" />
                                            <path d="M12 12l0 9" />
                                            <path d="M12 12l-8 -4.5" />
                                            <path d="M16 5.25l-8 4.5" />
                                        </svg>-->

                                        <i class="{{ $m->icono }}" style=" color: #0054a6; "></i>
                                    </span>
                                    <span class="nav-link-title">
                                        {{ $m->menu }}
                                    </span>
                                </a>

                                <div class="dropdown-menu">
                                    <div class="dropdown-menu-columns">
                                        <div class="dropdown-menu-column">
                                            @foreach ($m->submenu as $sm)
                                            @if ($sm->sme_tipo_link ==
                                            'interno')
                                            <a class="dropdown-item" href="{{ $sm->sme_link }}">
                                                @else
                                                <a class="dropdown-item" target="{{ $sm->sme_id }}"
                                                    href="{{ $sm->sme_link }}">
                                                    @endif
                                                    {{ $sm->sme_submenu }}
                                                </a>
                                                @endforeach

                                        </div>
                                    </div>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </header>
        <div class="page-wrapper">
            <!-- 
            <div class="page-header d-print-none">
                <div class="container-xl">
                    <div class="row g-2 align-items-center">
                       <div class="col">
                            <div class="page-pretitle">
                                Hola,
                            </div>
                            <h2 class="page-title">
                                Bienvenido!
                            </h2>
                        </div>
                        Page title actions
                        <div class="col-auto ms-auto d-print-none">
                            <div class="btn-list">
                            </div>
                        </div>
                    </div>
                </div>
            </div>-->

            <!-- Page body -->
            <div class="layout-fluid">
                @yield('content')
            </div>
            <div id="chat__" style=" position: fixed;    bottom: 0;    right: 0;    z-index: 1000;">
                <div id="chat__content" class="flex"
                    style=" position: fixed;    bottom: 0;    right: 0;    z-index: 1000;">

                </div>
            </div>

            <div style="position: fixed;    bottom: 0;    right: 10px;    z-index: 1000;">
                <div id="chat_zip_mini">

                </div>
            </div>
            <footer class="footer footer-transparent d-print-none">
                <div class="container-xl">
                    <div class="row text-center align-items-center flex-row-reverse">
                        <div class="col-12 col-lg-auto mt-3 mt-lg-0">
                            <ul class="list-inline list-inline-dots mb-0">
                                <li class="list-inline-item">
                                    Copyright &copy; 2023
                                    <a href="." class="link-secondary">Movilidad
                                        EP</a>.
                                    All rights reserved.
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <div class="modal modal-blur fade" id="modal-report" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content sepertinas">
                <div class="modal-header sinborder">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body globos ">
                    <br>
                    <br>
                    <br>
                    <h3 class="modal-title f2">Hoy es els cumpleaños</h3>
                    <div class="mb-3">
                        <label class="form-label f1_2" id="t_nombre"></label> <span id="t_edad"></span>
                        <input type="hidden" id="ip_cedula_to">
                        <img src id="img_empleado" alt="fotoempleado" class="foto_empleado">
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div>
                                <label class="form-label">Escríbele un
                                    mensaje:</label>
                                <textarea id="txt_mensaje" class="form-control" rows="3"></textarea>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="modal-footer">
                    <a href="#" class="btn btn-link link-secondary" data-bs-dismiss="modal">
                        Salir
                    </a>
                    <a href="javascript:void(0)" onclick="enviar_cumpleaños()" class="btn btn-primary ms-auto"
                        data-bs-dismiss="modal">
                        <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-cake" width="24"
                            height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M3 20h18v-8a3 3 0 0 0 -3 -3h-12a3 3 0 0 0 -3 3v8z"></path>
                            <path
                                d="M3 14.803c.312 .135 .654 .204 1 .197a2.4 2.4 0 0 0 2 -1a2.4 2.4 0 0 1 2 -1a2.4 2.4 0 0 1 2 1a2.4 2.4 0 0 0 2 1a2.4 2.4 0 0 0 2 -1a2.4 2.4 0 0 1 2 -1a2.4 2.4 0 0 1 2 1a2.4 2.4 0 0 0 2 1c.35 .007 .692 -.062 1 -.197">
                            </path>
                            <path d="M12 4l1.465 1.638a2 2 0 1 1 -3.015 .099l1.55 -1.737z"></path>
                        </svg>
                        Enviar mensaje
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="modal modal-blur fade" id="modal_aprobar_permiso" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">New report</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">Name</label>
                        <input type="text" class="form-control" name="example-text-input"
                            placeholder="Your report name">
                    </div>
                    <label class="form-label">Report type</label>
                    <div class="form-selectgroup-boxes row mb-3">
                        <div class="col-lg-6">
                            <label class="form-selectgroup-item">
                                <input type="radio" name="report-type" value="1" class="form-selectgroup-input" checked>
                                <span class="form-selectgroup-label d-flex align-items-center p-3">
                                    <span class="me-3">
                                        <span class="form-selectgroup-check"></span>
                                    </span>
                                    <span class="form-selectgroup-label-content">
                                        <span class="form-selectgroup-title strong mb-1">Simple</span>
                                        <span class="d-block text-secondary">Provide
                                            only basic data needed for
                                            the
                                            report</span>
                                    </span>
                                </span>
                            </label>
                        </div>
                        <div class="col-lg-6">
                            <label class="form-selectgroup-item">
                                <input type="radio" name="report-type" value="1" class="form-selectgroup-input">
                                <span class="form-selectgroup-label d-flex align-items-center p-3">
                                    <span class="me-3">
                                        <span class="form-selectgroup-check"></span>
                                    </span>
                                    <span class="form-selectgroup-label-content">
                                        <span class="form-selectgroup-title strong mb-1">Advanced</span>
                                        <span class="d-block text-secondary">Insert
                                            charts and additional
                                            advanced
                                            analyses to be inserted in
                                            the report</span>
                                    </span>
                                </span>
                            </label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="mb-3">
                                <label class="form-label">Report
                                    url</label>
                                <div class="input-group input-group-flat">
                                    <span class="input-group-text">
                                        https://tabler.io/reports/
                                    </span>
                                    <input type="text" class="form-control ps-0" value="report-01" autocomplete="off">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="mb-3">
                                <label class="form-label">Visibility</label>
                                <select class="form-select">
                                    <option value="1" selected>Private</option>
                                    <option value="2">Public</option>
                                    <option value="3">Hidden</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label class="form-label">Client
                                    name</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label class="form-label">Reporting
                                    period</label>
                                <input type="date" class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div>
                                <label class="form-label">Additional
                                    information</label>
                                <textarea class="form-control" rows="3"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="#" class="btn btn-link link-secondary" data-bs-dismiss="modal">
                        Cancel
                    </a>
                    <a href="#" class="btn btn-primary ms-auto" data-bs-dismiss="modal">
                        <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24"
                            stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M12 5l0 14" />
                            <path d="M5 12l14 0" />
                        </svg>
                        Create new report
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="modal modal-blur fade" id="modal_notificaciones" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-full-width modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 id="text_asunto"></h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <input type="hidden" id="id_notificacion">
                    <p id="noti_texto"></p>
                </div>
                <div class="modal-footer">
                    <a href="javascript:void(0)" onclick="cerrar_notificacion()" class="btn btn-primary ms-auto"
                        data-bs-dismiss="modal">
                        Cerrar
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Libs JS -->
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"
        integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <script src="{{ asset('tabler/dist/libs/apexcharts/dist/apexcharts.min.js?1685973381') }}" defer></script>
    <script src="{{ asset('tabler/dist/libs/jsvectormap/dist/js/jsvectormap.min.js?1685973381') }}" defer></script>
    <script src="{{ asset('tabler/dist/libs/jsvectormap/dist/maps/world.js?1685973381') }}" defer></script>
    <script src="{{ asset('tabler/dist/libs/jsvectormap/dist/maps/world-merc.js?1685973381') }}" defer></script>
    <script src="{{ asset('tabler/dist/libs/litepicker/dist/litepicker.js?1685973381') }}" defer></script>

    <!-- Tabler Core -->
    <script src="{{ asset('tabler/dist/js/tabler.min.js?1685973381') }}" defer></script>
    <script src="{{ asset('tabler/dist/js/demo.min.js?1685973381') }}" defer></script>
    <script src="https://cdn.socket.io/4.6.0/socket.io.min.js"
        integrity="sha384-c79GN5VsunZvi+Q/WObgk2in0CbZsHnjEqvFxC5DxHn9lTfNce2WW6h2pH6u/kF+" crossorigin="anonymous">

    </script>
    <!-- Begin emoji-picker JavaScript -->
    <script src="emoji/lib/js/config.min.js"></script>
    <script src="emoji/lib/js/util.min.js"></script>
    <script src="emoji/lib/js/jquery.emojiarea.min.js"></script>
    <script src="emoji/lib/js/emoji-picker.min.js"></script>
    <!-- End emoji-picker JavaScript -->
    <!--Internal  Notify js -->
    <script src="valex/assets/plugins/notify/js/notifIt.js"></script>
    <script src="valex/assets/plugins/notify/js/notifit-custom.js"></script>
    <script src="{{ asset('js/demo.js?v=1.0.0') }}" defer></script>

    <script src="/valex/assets/js/datatable/datatables.min.js"></script>
    <!-- Custom libs -->
    <script src="/valex/assets/js/custom/input-select-two-dates.js"></script>
    <script src="/valex/assets/js/custom/input-search-custom.js"></script>
    <script src="/valex/assets/js/custom/input-validation.js"></script>
    <script src="/valex/assets/js/custom/construct-table.js"></script>
    <script src="{{asset('js/plugins.js')}}"></script>
    @yield('js')

</body>

</html>