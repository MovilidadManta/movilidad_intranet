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
                        <h2>EVALUACIÓN DE DESEMPEÑO</h2>
                    </div>
                    <ol class="breadcrumb-list">
                        <li><a href="/home">Inicio</a> &nbsp;&gt;&nbsp;</li>
                        <li class="active">EVALUACIÓN DE DESEMPEÑO</li>
                    </ol>
                </div>
            </div>
        </div>
    </div> <!-- container -->
</section>

<section id="post-section" class="post-section av-py-default blog-page">
    <div class="av-container width-t">
        <div class="av-columns-area wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
            <div id="av-primary-content" class="av-column-12 wow fadeInUp"
                style="visibility: visible; animation-name: fadeInUp;">
                <div class="rt-container-fluid rt-tpg-container tpg-shortcode-main-wrapper rt-img-holder(height: 230px;)"
                    id="rt-tpg-container-985975327" data-layout="layout1" data-grid-style="even" data-desktop-col="3"
                    data-tab-col="2" data-mobile-col="1" data-sc-id="874">
                    <!--<div class="tpg-widget-heading-wrapper heading-style1 "><span class="tpg-widget-heading-line line-left"></span>
                        <h2 class="tpg-widget-heading">NOTICIAS MOVILIDAD MANTA</h2><span class="tpg-widget-heading-line"></span>-->

                </div>
                <div data-title="Loading ..." class="rt-row rt-content-loader layout1 tpg-even ">
                    @foreach($empleados_ev as $data)
                    <div class="rt-col-md-4 rt-col-sm-6 rt-col-xs-12 even-grid-item rt-grid-item margin-b-no "
                        data-id="1943">
                        <div class="container hei-eva">
                            <div class="row">
                                <div class="col-sm">
                                    <div class="row g-0">
                                        <div class="col-md-4"> <img
                                                src="http://192.168.0.250:8000/imagenes_empleados/{{$data->emp_ruta_foto}}"
                                                class="img-fluid rounded-start tam-img-turismo zoom" alt="..."> </div>
                                        <div class="col-md-8">

                                            <div class="card-body central-im">
                                                <h5 class="card-title color-titu-pag " align="center">
                                                    {{$data->emp_nombre}}
                                                    {{$data->emp_apellido}}</h5>
                                                <p class="card-text" align="center">{{$data->emp_cargo}}</p>
                                                <p class="card-text" align="center"><strong align="center">
                                                        @if($data->ev_total == null) 
                                                        <h3 align="center">0%</h3>
                                                        @else
                                                        <h3 align="center">{{$data->ev_total}}%</h3>
                                                        @endif
                                                    </strong></p>
                                                <div align="center">
                                                    <span class="read-more">
                                                        <a class="btn btn-eliminar"
                                                            href="/evaluar-empleado/{{$data->emp_id}}"><i
                                                                class="fa fa-trash color-letra"></i><strong>
                                                                Eliminar</strong></a>
                                                    </span>
                                                    <span class="read-more">
                                                        <a class="btn btn-noticia"
                                                            href="/evaluar-empleado/{{$data->emp_id}}"><i
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
                    </div>
                    @endforeach

                    <!--@foreach($empleados_ev as $data)
                    <div class="col-4 col-sm-4 hei-eva">
                        <div class="row g-0">
                            <div class="col-md-4"> <img
                                    src="http://192.168.0.250:8000/imagenes_empleados/{{$data->emp_ruta_foto}}"
                                    class="img-fluid rounded-start tam-img-turismo zoom" alt="..."> </div>
                            <div class="col-md-8">

                                <div class="card-body central-im">
                                    <h5 class="card-title color-titu-pag " align="center">{{$data->emp_nombre}}
                                        {{$data->emp_apellido}}</h5>
                                    <p class="card-text" align="center">{{$data->emp_cargo}}</p>
                                    <p class="card-text" align="center"><strong align="center">
                                            <h3 align="center">40%</h3>
                                        </strong></p>
                                    <div align="center">
                                        <span class="read-more">
                                            <a class="btn btn-eliminar" href="/evaluar-empleado-id/{{$data->emp_id}}"><i
                                                    class="fa fa-trash color-letra"></i><strong>
                                                    Eliminar</strong></a>
                                        </span>
                                        <span class="read-more">
                                            <a class="btn btn-noticia" href="/evaluar-empleado-id/{{$data->emp_id}}"><i
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
            @endforeach-->

        </div>
    </div>
    </div>
</section>
@endsection

@section('js')

@endsection

@else
<script>
location.href = "/";
</script>
@endif