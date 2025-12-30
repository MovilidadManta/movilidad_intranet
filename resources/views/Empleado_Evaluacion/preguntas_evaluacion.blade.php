@if(Session::get('nombres'))
@extends('Layout.app_intranet')
@section('css')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
@endsection

@section('content')
<section id="breadcrumb-section" class="breadcrumb-area breadcrumb-center">
    <div class="av-container">
        <div class="av-columns-area">
            <div class="av-column-12">
                <div class="breadcrumb-content">
                    <div class="breadcrumb-heading">
                        <h2>EVALUACIÓN DE DESEMPEÑO 360°</h2>
                    </div>
                    <ol class="breadcrumb-list">
                        <li><a href="/home">Inicio</a> &nbsp;&gt;&nbsp;</li>
                        <li class="active">EVALUACIÓN DE DESEMPEÑO 360°</li>
                    </ol>
                </div>
            </div>
        </div>
    </div> <!-- container -->
</section>

<section id="post-section" class="post-section av-py-default blog-page">
    <div class="av-container">
        <div class="wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
            <div id="av-primary-content" class="av-column-12 wow fadeInUp"
                style="visibility: visible; animation-name: fadeInUp;">
                <div class="rt-container-fluid rt-tpg-container tpg-shortcode-main-wrapper rt-img-holder(height: 300px;)"
                    id="rt-tpg-container-985975327" data-layout="layout1" data-grid-style="even" data-desktop-col="3"
                    data-tab-col="2" data-mobile-col="1" data-sc-id="874">
                    <!--<div class="tpg-widget-heading-wrapper heading-style1 "><span class="tpg-widget-heading-line line-left"></span>
                        <h2 class="tpg-widget-heading">NOTICIAS MOVILIDAD MANTA</h2><span class="tpg-widget-heading-line"></span>-->

                </div>
                <div data-title="Loading ..." class="rt-row rt-content-loader layout1 tpg-even ">
                    <div class="cargando-not-pag" id="div-noticia-paginacion"></div>
                    <form class="form" novalidate id="form-evaluacion" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="csrf-token" value="{{csrf_token()}}" id="csrf-token">
                        <input type="hidden" name="txt-id-empleado" id="txt-id-empleado" value="{{$id_empleado}}">
                        <div id="div-empleado">

                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</section>
@endsection

@section('js')
<script type="text/javascript" src="/js/Evaluacion/pregunta_evaluacion.js"></script>
@endsection

@else
<script>
location.href = "/";
</script>
@endif