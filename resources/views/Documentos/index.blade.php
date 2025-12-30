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

    .azul {
        color: #0077c0;
    }

    .verde {
        color: #18b173;
    }

    .rojo {
        color: #fb5885;
    }

    .gris {
        color: #bdbcbc;
    }

    .cortar {
        font-size: 12px;
        overflow: hidden !important;
        text-overflow: ellipsis !important;
        display: -webkit-box !important;
        -webkit-box-orient: vertical !important;
        -webkit-line-clamp: 1 !important;
    }

    .mt_02 {
        margin-top: 0.2em
    }

    .ml_1 {
        margin-left: 1em;
        ;
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
            <div class="row g-2 align-items-center">
                <div class="col">
                    <h4>
                        <ol class="breadcrumb breadcrumb-arrows" id="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">{{strtoupper($folder)}}</a></li>
                        </ol>
                    </h4>
                </div>

            </div>
            <div class="row" id="mi_unidad">
                @php $caracteres = strlen($folder); @endphp

                @foreach($folder_ as $d)

                @php
                $carpeta_ = substr($d,$caracteres+1);
                //echo $carpeta_;
                $carpeta_a = '"'.$carpeta_.'"';
                $separador_pdf = ".pdf";
                $separador_doc = ".doc";
                $separador_docx = ".docx";
                $separador_xls = ".xls";
                $separador_png = ".png";
                $separador_jpg = ".jpg";
                $separador_jpeg = ".jpeg";
                $separador_zip = ".zip";
                $separador_rar = ".rar";
                $separador_7zip = ".7zip";
                $separador_csv = ".csv";
                $separador_mp4 = ".mp4";
                $arry_ext = explode($separador_pdf,$carpeta_);
                $ext_doc = explode($separador_doc,$carpeta_);
                $ext_docx = explode($separador_docx,$carpeta_);
                $ext_xls = explode($separador_xls,$carpeta_);
                $ext_png = explode($separador_png,$carpeta_);
                $ext_jpg = explode($separador_jpg,$carpeta_);
                $ext_jpeg = explode($separador_jpeg,$carpeta_);
                $ext_zip = explode($separador_zip,$carpeta_);
                $ext_rar = explode($separador_rar,$carpeta_);
                $ext_7zip = explode($separador_7zip,$carpeta_);
                $ext_csv = explode($separador_csv,$carpeta_);
                $ext_mp4 = explode($separador_mp4,$carpeta_);
                @endphp
                @if(sizeof($arry_ext)>1)
                <div class="col-md-6 col-lg-3">
                    <a href="javascript:void(0)" onclick="descargar_archivo_docu('{{$d}}');" data-toggle="tooltip" data-placement="bottom" title="{{$carpeta_}}" class="card card-link">
                        <div class="card-body d-flex">
                            <i class="fa-solid fa-file-pdf rojo mt_02"></i>
                            <span class="cortar ml_1">{{$carpeta_}}</span>
                        </div>
                    </a>
                </div>
                @elseif(sizeof($ext_doc)>1)
                <div class="col-md-6 col-lg-3">
                    <a href="javascript:void(0)" onclick="descargar_archivo_docu('{{$d}}');" data-toggle="tooltip" data-placement="bottom" title="{{$carpeta_}}" class="card card-link">
                        <div class="card-body d-flex">
                            <i class="fa-regular fa-file-word azul mt_02"></i>
                            <span class="cortar ml_1">{{$carpeta_}}</span>
                        </div>
                    </a>
                </div>
                @elseif(sizeof($ext_docx)>1)
                <div class="col-md-6 col-lg-3">
                    <a href="javascript:void(0)" onclick="descargar_archivo_docu('{{$d}}');" data-toggle="tooltip" data-placement="bottom" title="{{$carpeta_}}" class="card card-link">
                        <div class="card-body d-flex">
                            <i class="fa-regular fa-file-word azul mt_02"></i>
                            <span class="cortar ml_1">{{$carpeta_}}</span>
                        </div>
                    </a>
                </div>
                @elseif(sizeof($ext_xls)>1)
                <div class="col-md-6 col-lg-3">
                    <a href="javascript:void(0)" onclick="descargar_archivo_docu('{{$d}}');" data-toggle="tooltip" data-placement="bottom" title="{{$carpeta_}}" class="card card-link">
                        <div class="card-body d-flex">
                            <i class="fa-regular fa-file-excel verde mt_02"></i>
                            <span class="cortar ml_1">{{$carpeta_}}</span>
                        </div>
                    </a>
                </div>
                @elseif(sizeof($ext_png)>1)
                <div class="col-md-6 col-lg-3">
                    <a href="javascript:void(0)" onclick="descargar_archivo_docu('{{$d}}');" data-toggle="tooltip" data-placement="bottom" title="{{$carpeta_}}" class="card card-link">
                        <div class="card-body d-flex">
                            <i class="fa-regular fa-file-image mt_02"></i>
                            <span class="cortar ml_1">{{$carpeta_}}</span>
                        </div>
                    </a>
                </div>
                @elseif(sizeof($ext_jpg)>1)
                <div class="col-md-6 col-lg-3">
                    <a href="javascript:void(0)" onclick="descargar_archivo_docu('{{$d}}');" data-toggle="tooltip" data-placement="bottom" title="{{$carpeta_}}" class="card card-link">
                        <div class="card-body d-flex">
                            <i class="fa-regular fa-file-image mt_02"></i>
                            <span class="cortar ml_1">{{$carpeta_}}</span>
                        </div>
                    </a>
                </div>
                @elseif(sizeof($ext_jpeg)>1)
                <div class="col-md-6 col-lg-3">
                    <a href="javascript:void(0)" onclick="descargar_archivo_docu('{{$d}}');" data-toggle="tooltip" data-placement="bottom" title="{{$carpeta_}}" class="card card-link">
                        <div class="card-body d-flex">
                            <i class="fa-regular fa-file-image mt_02"></i>
                            <span class="cortar ml_1">{{$carpeta_}}</span>
                        </div>
                    </a>
                </div>
                @elseif(sizeof($ext_zip)>1)
                <div class="col-md-6 col-lg-3">
                    <a href="javascript:void(0)" onclick="descargar_archivo_docu('{{$d}}');" data-toggle="tooltip" data-placement="bottom" title="{{$carpeta_}}" class="card card-link">
                        <div class="card-body d-flex">
                            <i class="fa-regular fa-file-archive mt_02"></i>
                            <span class="cortar ml_1">{{$carpeta_}}</span>
                        </div>
                    </a>
                </div>
                @elseif(sizeof($ext_rar)>1)
                <div class="col-md-6 col-lg-3">
                    <a href="javascript:void(0)" onclick="descargar_archivo_docu('{{$d}}');" data-toggle="tooltip" data-placement="bottom" title="{{$carpeta_}}" class="card card-link">
                        <div class="card-body d-flex">
                            <i class="fa-regular fa-file-archive mt_02"></i>
                            <span class="cortar ml_1">{{$carpeta_}}</span>
                        </div>
                    </a>
                </div>
                @elseif(sizeof($ext_7zip)>1)
                <div class="col-md-6 col-lg-3">
                    <a href="javascript:void(0)" onclick="descargar_archivo_docu('{{$d}}');" data-toggle="tooltip" data-placement="bottom" title="{{$carpeta_}}" class="card card-link">
                        <div class="card-body d-flex">
                            <i class="fa-regular fa-file-archive mt_02"></i>
                            <span class="cortar ml_1">{{$carpeta_}}</span>
                        </div>
                    </a>
                </div>
                @elseif(sizeof($ext_csv)>1)
                <div class="col-md-6 col-lg-3">
                    <a href="javascript:void(0)" onclick="descargar_archivo_docu('{{$d}}');" data-toggle="tooltip" data-placement="bottom" title="{{$carpeta_}}" class="card card-link">
                        <div class="card-body d-flex">
                            <i class="fa-regular fa-file-csv mt_02"></i>
                            <span class="cortar ml_1">{{$carpeta_}}</span>
                        </div>
                    </a>
                </div>
                @elseif(sizeof($ext_mp4)>1)
                <div class="col-md-6 col-lg-3">
                    <a href="javascript:void(0)" onclick="ver_video('{{$folder}}','{{$carpeta_}}');" data-toggle="tooltip" data-placement="bottom" title="{{$carpeta_}}" class="card card-link">
                        <div class="card-body d-flex">
                            <i class="fa-regular fa-file-video mt_02"></i>
                            <span class="cortar ml_1">{{$carpeta_}}</span>
                        </div>
                    </a>
                </div>
                @else
                <div class="col-md-6 col-lg-3">
                    <a href="javascript:void(0)" onclick="abrir_carpeta('{{$d}}','{{$carpeta_}}','{{$folder}}');" data-toggle="tooltip" data-placement="bottom" title="{{$carpeta_}}" class="card card-link">
                        <div class="card-body d-flex">
                            <i class="fa-solid fa-folder gris mt_02"></i>
                            <span class="cortar ml_1">{{$carpeta_}}</span>
                        </div>
                    </a>
                </div>
                @endif

                @endforeach
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="modal_video" role="dialog" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <!--<button type="button" class="close" data-dismiss="modal">&times;</button>-->
            </div>
            <div class="modal-body">
                <h4 id="titulo_video">
                    </h2>
                    <div id="mivideo">

                    </div>
                    <!--<p>Curabitur blandit mollis lacus. Nulla sit amet est. Suspendisse nisl elit, rhoncus eget, elementum ac, condimentum eget, diam. Donec min odio, faucibus at, scelerisquese quis, convallisdse. Cras sagittis.data-dismiss="modal" </p>-->
                    <br>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" onclick="cerrar_modal()"><i class=" fa fa-thumbs-up"></i> Cerrar</button>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
<script>
    let carpetas = []

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

    function descargar_archivo_docu(ruta) {
        let r = btoa(unescape(encodeURIComponent(ruta)));

        var url = "/descargar_archivo/" + r;
        console.log(url);
        var a = document.createElement("a");
        a.target = "_blank";
        a.href = url;
        a.click();
    }

    function abrir_carpeta(carpeta, nombre, home) {
        if (carpetas.length == 0) {
            carpetas.push(home)
            carpetas.push(nombre)
        } else {
            carpetas.push(nombre)
        }
        let htmls = "";
        var token = $("#csrf-token").val();
        let home_ = "'" + home + "'";
        $.ajax({
            url: '/directorio',
            type: 'POST',
            headers: {
                'X-CSRF-TOKEN': token
            },
            dataType: 'json',
            data: {
                carpeta: carpeta
            },
            success: function(res) {
                $.each(res, function(index, u) {
                    let count_caracter = carpeta.length;
                    let carpeta_ = u.substring(count_caracter + 1);
                    let carpeta_a = "'" + carpeta + "/" + carpeta_ + "'";
                    let folder = "'" + carpeta_ + "'";

                    let separador_pdf = ".pdf";
                    let separador_doc = ".doc";
                    let separador_docx = ".docx";
                    let separador_xls = ".xls";
                    let separador_png = ".png";
                    let separador_jpg = ".jpg";
                    let separador_jpeg = ".jpeg";
                    let separador_zip = ".zip";
                    let separador_rar = ".rar";
                    let separador_7zip = ".7zip";
                    let separador_csv = ".csv";
                    let separador_mp4 = ".mp4";
                    let arry_ext = carpeta_.split(separador_pdf);
                    let ext_doc = carpeta_.split(separador_doc);
                    let ext_docx = carpeta_.split(separador_docx);
                    let ext_xls = carpeta_.split(separador_xls);
                    let ext_png = carpeta_.split(separador_png);
                    let ext_jpg = carpeta_.split(separador_jpg);
                    let ext_jpeg = carpeta_.split(separador_jpeg);
                    let ext_zip = carpeta_.split(separador_zip);
                    let ext_rar = carpeta_.split(separador_rar);
                    let ext_7zip = carpeta_.split(separador_7zip);
                    let ext_csv = carpeta_.split(separador_csv);
                    let ext_mp4 = carpeta_.split(separador_mp4);

                    //console.log(arry_ext);
                    if (arry_ext.length > 1) {
                        htmls += '<div class="col-md-6 col-lg-3">'
                        htmls += '<a href="javascript:void(0)" onclick="descargar_archivo_docu(' + carpeta_a + ');" data-toggle="tooltip" data-placement="bottom" title="' + carpeta_ + '" class="card card-link">'
                        htmls += '<div class="card-body d-flex"><i class="fa-solid fa-file-pdf rojo mt_02"></i><span class="cortar ml_1">' + carpeta_ + '</span></div></a></div>'

                    } else if (ext_doc.length > 1) {
                        htmls += '<div class="col-md-6 col-lg-3">'
                        htmls += '<a href="javascript:void(0)" onclick="descargar_archivo_docu(' + carpeta_a + ');" data-toggle="tooltip" data-placement="bottom" title="' + carpeta_ + '" class="card card-link">'
                        htmls += '<div class="card-body d-flex"><i class="fa-solid fa-file-word azul mt_02"></i><span class="cortar ml_1">' + carpeta_ + '</span></div></a></div>'

                    } else if (ext_docx.length > 1) {
                        htmls += '<div class="col-md-6 col-lg-3">'
                        htmls += '<a href="javascript:void(0)" onclick="descargar_archivo_docu(' + carpeta_a + ');" data-toggle="tooltip" data-placement="bottom" title="' + carpeta_ + '" class="card card-link">'
                        htmls += '<div class="card-body d-flex"><i class="fa-solid fa-file-word azul mt_02"></i><span class="cortar ml_1">' + carpeta_ + '</span></div></a></div>'

                    } else if (ext_xls.length > 1) {
                        htmls += '<div class="col-md-6 col-lg-3">'
                        htmls += '<a href="javascript:void(0)" onclick="descargar_archivo_docu(' + carpeta_a + ');" data-toggle="tooltip" data-placement="bottom" title="' + carpeta_ + '" class="card card-link">'
                        htmls += '<div class="card-body d-flex"><i class="fa-solid fa-file-excel verde mt_02"></i><span class="cortar ml_1">' + carpeta_ + '</span></div></a></div>'
                    } else if (ext_png.length > 1) {
                        htmls += '<div class="col-md-6 col-lg-3">'
                        htmls += '<a href="javascript:void(0)" onclick="descargar_archivo_docu(' + carpeta_a + ');" data-toggle="tooltip" data-placement="bottom" title="' + carpeta_ + '" class="card card-link">'
                        htmls += '<div class="card-body d-flex"><i class="fa-solid fa-file-image mt_02"></i><span class="cortar ml_1">' + carpeta_ + '</span></div></a></div>'
                    } else if (ext_jpg.length > 1) {
                        htmls += '<div class="col-md-6 col-lg-3">'
                        htmls += '<a href="javascript:void(0)" onclick="descargar_archivo_docu(' + carpeta_a + ');" data-toggle="tooltip" data-placement="bottom" title="' + carpeta_ + '" class="card card-link">'
                        htmls += '<div class="card-body d-flex"><i class="fa-solid fa-file-image mt_02"></i><span class="cortar ml_1">' + carpeta_ + '</span></div></a></div>'

                    } else if (ext_jpeg.length > 1) {
                        htmls += '<div class="col-md-6 col-lg-3">'
                        htmls += '<a href="javascript:void(0)" onclick="descargar_archivo_docu(' + carpeta_a + ');" data-toggle="tooltip" data-placement="bottom" title="' + carpeta_ + '" class="card card-link">'
                        htmls += '<div class="card-body d-flex"><i class="fa-solid fa-file-image mt_02"></i><span class="cortar ml_1">' + carpeta_ + '</span></div></a></div>'
                    } else if (ext_zip.length > 1) {
                        htmls += '<div class="col-md-6 col-lg-3">'
                        htmls += '<a href="javascript:void(0)" onclick="descargar_archivo_docu(' + carpeta_a + ');" data-toggle="tooltip" data-placement="bottom" title="' + carpeta_ + '" class="card card-link">'
                        htmls += '<div class="card-body d-flex"><i class="fa-solid fa-file-archive mt_02"></i><span class="cortar ml_1">' + carpeta_ + '</span></div></a></div>'
                    } else if (ext_rar.length > 1) {
                        htmls += '<div class="col-md-6 col-lg-3">'
                        htmls += '<a href="javascript:void(0)" onclick="descargar_archivo_docu(' + carpeta_a + ');" data-toggle="tooltip" data-placement="bottom" title="' + carpeta_ + '" class="card card-link">'
                        htmls += '<div class="card-body d-flex"><i class="fa-solid fa-file-archive mt_02"></i><span class="cortar ml_1">' + carpeta_ + '</span></div></a></div>'
                    } else if (ext_7zip.length > 1) {
                        htmls += '<div class="col-md-6 col-lg-3">'
                        htmls += '<a href="javascript:void(0)" onclick="descargar_archivo_docu(' + carpeta_a + ');" data-toggle="tooltip" data-placement="bottom" title="' + carpeta_ + '" class="card card-link">'
                        htmls += '<div class="card-body d-flex"><i class="fa-solid fa-file-archive mt_02"></i><span class="cortar ml_1">' + carpeta_ + '</span></div></a></div>'
                    } else if (ext_csv.length > 1) {
                        htmls += '<div class="col-md-6 col-lg-3">'
                        htmls += '<a href="javascript:void(0)" onclick="descargar_archivo_docu(' + carpeta_a + ');" data-toggle="tooltip" data-placement="bottom" title="' + carpeta_ + '" class="card card-link">'
                        htmls += '<div class="card-body d-flex"><i class="fa-solid fa-file-csv mt_02"></i><span class="cortar ml_1">' + carpeta_ + '</span></div></a></div>'
                    } else if (ext_mp4.length > 1) {
                        htmls += '<div class="col-md-6 col-lg-3">'
                        htmls += '<a href="javascript:void(0)" onclick="ver_video(' + carpeta_a + ');" data-toggle="tooltip" data-placement="bottom" title="' + carpeta_ + '" class="card card-link">'
                        htmls += '<div class="card-body d-flex"><i class="fa-solid fa-file-video mt_02"></i><span class="cortar ml_1">' + carpeta_ + '</span></div></a></div>'
                    } else {
                        htmls += '<div class="col-md-6 col-lg-3">'
                        htmls += '<a href="javascript:void(0)" onclick="abrir_carpeta(' + carpeta_a + ',' + folder + ',' + home_ + ');" data-toggle="tooltip" data-placement="bottom" title="' + carpeta_ + '" class="card card-link"><div class="card-body d-flex"><i class="fa-solid fa-folder gris mt_02"></i>'
                        htmls += '<span class="cortar ml_1">' + carpeta_ + '</span></div></a></div>'
                    }
                })
                $("#mi_unidad").html(htmls);
                $("#carpeta_actual").html(carpeta);


                let nav_ = "";
                let count_caracter = carpeta.length;
                let carpeta_anterior = '';
                for (var i = 0; i < carpetas.length; i++) {
                    let carpeta_ = carpetas[i].substring(count_caracter + 1);
                    let carpeta_a = "'" + carpeta + "/" + carpeta_ + "'";
                    let folder = "'" + carpeta_ + "'";
                    if (carpetas.length - 1 == i) {
                        nav_ += "<li class='breadcrumb-item active' aria-current='page'>" + carpetas[i] + "</li>"
                    } else {

                        if (i == 0) {
                            carpeta_anterior += carpetas[i];
                            nav_ += "<li class='breadcrumb-item'><a href='" + carpetas[i] + "'>" + carpetas[i] + "</a></li>"
                        } else {

                            carpeta_anterior += "/" + carpetas[i];
                            let carpeta__ = "'" + carpeta_anterior + "'";
                            let folder__ = "'" + carpetas[0] + "'";
                            let folder_current = "'" + carpetas[carpetas.length - 1] + "'";
                            nav_ += '<li class="breadcrumb-item"><a href="javascript:void(0);" onclick="cerrar_carpeta(' + carpeta__ + ',' + folder_current + ',' + folder__ + ')">' + carpetas[i] + '</a></li>';
                        }
                    }
                }
                $("#breadcrumb").html(nav_);
            }
        }).fail(function(jqXHR, textStatus, errorthrown) {
            if (jqXHR.status === 0) {

                alert('Not connect: Verify Network.');

            } else if (jqXHR.status == 404) {

                alert('Requested page not found [404]');

            } else if (jqXHR.status == 500) {

                alert('Internal Server Error [500].');

            } else if (textStatus === 'parsererror') {

                alert('Requested JSON parse failed.');

            } else if (textStatus === 'timeout') {

                alert('Time out error.');

            } else if (textStatus === 'abort') {

                alert('Ajax request aborted.');

            } else {

                alert('Uncaught Error: ' + jqXHR.responseText);

            }

        })
    }

    function cerrar_carpeta(carpeta, x, home) {
        carpetas.pop()
        //let ruta_raiz = '/';

        // carpeta = ruta_raiz + carpeta;
        let htmls = "";
        var token = $("#csrf-token").val();
        let home_ = "'" + home + "'";
        //alert(home+" / "+nombre);
        $.ajax({
            url: '/directorio',
            type: 'POST',
            headers: {
                'X-CSRF-TOKEN': token
            },
            dataType: 'json',
            data: {
                carpeta: carpeta
            },
            success: function(res) {
                $.each(res, function(index, u) {
                    let count_caracter = carpeta.length;
                    let carpeta_ = u.substring(count_caracter + 1);
                    let carpeta_a = "'" + carpeta + "/" + carpeta_ + "'";
                    let folder = "'" + carpeta_ + "'";

                    let separador_pdf = ".pdf";
                    let separador_doc = ".doc";
                    let separador_docx = ".docx";
                    let separador_xls = ".xls";
                    let separador_png = ".png";
                    let separador_jpg = ".jpg";
                    let separador_jpeg = ".jpeg";
                    let separador_zip = ".zip";
                    let separador_rar = ".rar";
                    let separador_7zip = ".7zip";
                    let separador_csv = ".csv";
                    let separador_mp4 = ".mp4";
                    let arry_ext = carpeta_.split(separador_pdf);
                    let ext_doc = carpeta_.split(separador_doc);
                    let ext_docx = carpeta_.split(separador_docx);
                    let ext_xls = carpeta_.split(separador_xls);
                    let ext_png = carpeta_.split(separador_png);
                    let ext_jpg = carpeta_.split(separador_jpg);
                    let ext_jpeg = carpeta_.split(separador_jpeg);
                    let ext_zip = carpeta_.split(separador_zip);
                    let ext_rar = carpeta_.split(separador_rar);
                    let ext_7zip = carpeta_.split(separador_7zip);
                    let ext_csv = carpeta_.split(separador_csv);
                    let ext_mp4 = carpeta_.split(separador_mp4);

                    //console.log(arry_ext);
                    if (arry_ext.length > 1) {
                        htmls += '<div class="col-md-6 col-lg-3">'
                        htmls += '<a href="javascript:void(0)" onclick="descargar_archivo_docu(' + carpeta_a + ');" data-toggle="tooltip" data-placement="bottom" title="' + carpeta_ + '" class="card card-link">'
                        htmls += '<div class="card-body d-flex"><i class="fa-solid fa-file-pdf rojo mt_02"></i><span class="cortar ml_1">' + carpeta_ + '</span></div></a></div>'

                    } else if (ext_doc.length > 1) {
                        htmls += '<div class="col-md-6 col-lg-3">'
                        htmls += '<a href="javascript:void(0)" onclick="descargar_archivo_docu(' + carpeta_a + ');" data-toggle="tooltip" data-placement="bottom" title="' + carpeta_ + '" class="card card-link">'
                        htmls += '<div class="card-body d-flex"><i class="fa-solid fa-file-word azul mt_02"></i><span class="cortar ml_1">' + carpeta_ + '</span></div></a></div>'

                    } else if (ext_docx.length > 1) {
                        htmls += '<div class="col-md-6 col-lg-3">'
                        htmls += '<a href="javascript:void(0)" onclick="descargar_archivo_docu(' + carpeta_a + ');" data-toggle="tooltip" data-placement="bottom" title="' + carpeta_ + '" class="card card-link">'
                        htmls += '<div class="card-body d-flex"><i class="fa-solid fa-file-word azul mt_02"></i><span class="cortar ml_1">' + carpeta_ + '</span></div></a></div>'

                    } else if (ext_xls.length > 1) {
                        htmls += '<div class="col-md-6 col-lg-3">'
                        htmls += '<a href="javascript:void(0)" onclick="descargar_archivo_docu(' + carpeta_a + ');" data-toggle="tooltip" data-placement="bottom" title="' + carpeta_ + '" class="card card-link">'
                        htmls += '<div class="card-body d-flex"><i class="fa-solid fa-file-excel verde mt_02"></i><span class="cortar ml_1">' + carpeta_ + '</span></div></a></div>'
                    } else if (ext_png.length > 1) {
                        htmls += '<div class="col-md-6 col-lg-3">'
                        htmls += '<a href="javascript:void(0)" onclick="descargar_archivo_docu(' + carpeta_a + ');" data-toggle="tooltip" data-placement="bottom" title="' + carpeta_ + '" class="card card-link">'
                        htmls += '<div class="card-body d-flex"><i class="fa-solid fa-file-image mt_02"></i><span class="cortar ml_1">' + carpeta_ + '</span></div></a></div>'
                    } else if (ext_jpg.length > 1) {
                        htmls += '<div class="col-md-6 col-lg-3">'
                        htmls += '<a href="javascript:void(0)" onclick="descargar_archivo_docu(' + carpeta_a + ');" data-toggle="tooltip" data-placement="bottom" title="' + carpeta_ + '" class="card card-link">'
                        htmls += '<div class="card-body d-flex"><i class="fa-solid fa-file-image mt_02"></i><span class="cortar ml_1">' + carpeta_ + '</span></div></a></div>'

                    } else if (ext_jpeg.length > 1) {
                        htmls += '<div class="col-md-6 col-lg-3">'
                        htmls += '<a href="javascript:void(0)" onclick="descargar_archivo_docu(' + carpeta_a + ');" data-toggle="tooltip" data-placement="bottom" title="' + carpeta_ + '" class="card card-link">'
                        htmls += '<div class="card-body d-flex"><i class="fa-solid fa-file-image mt_02"></i><span class="cortar ml_1">' + carpeta_ + '</span></div></a></div>'
                    } else if (ext_zip.length > 1) {
                        htmls += '<div class="col-md-6 col-lg-3">'
                        htmls += '<a href="javascript:void(0)" onclick="descargar_archivo_docu(' + carpeta_a + ');" data-toggle="tooltip" data-placement="bottom" title="' + carpeta_ + '" class="card card-link">'
                        htmls += '<div class="card-body d-flex"><i class="fa-solid fa-file-archive mt_02"></i><span class="cortar ml_1">' + carpeta_ + '</span></div></a></div>'
                    } else if (ext_rar.length > 1) {
                        htmls += '<div class="col-md-6 col-lg-3">'
                        htmls += '<a href="javascript:void(0)" onclick="descargar_archivo_docu(' + carpeta_a + ');" data-toggle="tooltip" data-placement="bottom" title="' + carpeta_ + '" class="card card-link">'
                        htmls += '<div class="card-body d-flex"><i class="fa-solid fa-file-archive mt_02"></i><span class="cortar ml_1">' + carpeta_ + '</span></div></a></div>'
                    } else if (ext_7zip.length > 1) {
                        htmls += '<div class="col-md-6 col-lg-3">'
                        htmls += '<a href="javascript:void(0)" onclick="descargar_archivo_docu(' + carpeta_a + ');" data-toggle="tooltip" data-placement="bottom" title="' + carpeta_ + '" class="card card-link">'
                        htmls += '<div class="card-body d-flex"><i class="fa-solid fa-file-archive mt_02"></i><span class="cortar ml_1">' + carpeta_ + '</span></div></a></div>'
                    } else if (ext_csv.length > 1) {
                        htmls += '<div class="col-md-6 col-lg-3">'
                        htmls += '<a href="javascript:void(0)" onclick="descargar_archivo_docu(' + carpeta_a + ');" data-toggle="tooltip" data-placement="bottom" title="' + carpeta_ + '" class="card card-link">'
                        htmls += '<div class="card-body d-flex"><i class="fa-solid fa-file-csv mt_02"></i><span class="cortar ml_1">' + carpeta_ + '</span></div></a></div>'
                    } else if (ext_mp4.length > 1) {
                        htmls += '<div class="col-md-6 col-lg-3">'
                        htmls += '<a href="javascript:void(0)" onclick="ver_video(' + carpeta_a + ');" data-toggle="tooltip" data-placement="bottom" title="' + carpeta_ + '" class="card card-link">'
                        htmls += '<div class="card-body d-flex"><i class="fa-solid fa-file-video mt_02"></i><span class="cortar ml_1">' + carpeta_ + '</span></div></a></div>'
                    } else {
                        htmls += '<div class="col-md-6 col-lg-3">'
                        htmls += '<a href="javascript:void(0)" onclick="abrir_carpeta(' + carpeta_a + ',' + folder + ',' + home_ + ');" data-toggle="tooltip" data-placement="bottom" title="' + carpeta_ + '" class="card card-link"><div class="card-body d-flex"><i class="fa-solid fa-folder gris mt_02"></i>'
                        htmls += '<span class="cortar ml_1">' + carpeta_ + '</span></div></a></div>'
                    }
                })
                $("#mi_unidad").html(htmls);
                $("#carpeta_actual").html(carpeta);


                let nav_ = "";
                let count_caracter = carpeta.length;
                let carpeta_anterior = '';
                for (var i = 0; i < carpetas.length; i++) {
                    let carpeta_ = carpetas[i].substring(count_caracter + 1);
                    let carpeta_a = "'" + carpeta + "/" + carpeta_ + "'";
                    let folder = "'" + carpeta_ + "'";
                    if (carpetas.length - 1 == i) {
                        nav_ += "<li class='breadcrumb-item active' aria-current='page'>" + carpetas[i] + "</li>"
                    } else {

                        if (i == 0) {
                            carpeta_anterior += carpetas[i];
                            nav_ += "<li class='breadcrumb-item'><a href='" + carpetas[i] + "'>" + carpetas[i] + "</a></li>"
                        } else {
                            carpeta_anterior += "/" + carpetas[i];
                            let carpeta__ = "'" + carpeta_anterior + "'";
                            let folder__ = "'" + carpetas[0] + "'";
                            let folder_current = "'" + carpetas[carpetas.length - 1] + "'";
                            nav_ += '<li class="breadcrumb-item"><a href="javascript:void(0);" onclick="cerrar_carpeta(' + carpeta__ + ',' + folder__ + ',' + folder_current + ')">' + carpetas[i] + '</a></li>';
                        }
                    }
                }
                $("#breadcrumb").html(nav_);
            }
        }).fail(function(jqXHR, textStatus, errorthrown) {
            if (jqXHR.status === 0) {

                alert('Not connect: Verify Network.');

            } else if (jqXHR.status == 404) {

                alert('Requested page not found [404]');

            } else if (jqXHR.status == 500) {

                alert('Internal Server Error [500].');

            } else if (textStatus === 'parsererror') {

                alert('Requested JSON parse failed.');

            } else if (textStatus === 'timeout') {

                alert('Time out error.');

            } else if (textStatus === 'abort') {

                alert('Ajax request aborted.');

            } else {

                alert('Uncaught Error: ' + jqXHR.responseText);

            }

        })

    }

    function ver_video(carpeta, archivo) {
        let video = "<video width='100%' height='400' src='/documentos/" + carpeta + "/" + archivo + "' controls>  <p>Tu navegador no soporta HTML5 video. Aquí está el <a href='" + carpeta + "'>enlace del video</a>.</p></video>";

        $("#modal_video").modal("show");
        $("#mivideo").html(video);
    }

    function cerrar_modal() {
        $("#modal_video").modal("hide");
        $("#mivideo").html("");
    }
</script>

@endsection
@else
<script>
    location.href = "/";
</script>


@endif