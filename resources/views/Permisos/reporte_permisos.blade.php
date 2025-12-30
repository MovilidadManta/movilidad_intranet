@if (Session::get('nombres'))
@extends('Layout.app_index')

@section('content')
<div class="page-body">
    <div class="container-xl contain">
        <h1>Reporte de solicitudes de permisos y vacaciones</h1>
        <div class="card">
            <div class="card-body">
                <div class="row justify-content-center">
                    <div align='center' class="col-1 mg-t-10 input-icon">
                        <strong>Fecha inicio</strong>
                    </div>
                    <div align='left' class="col-4 input-icon">
                        <input class="form-control mb-2" placeholder="Select a date" id="txt-fecha-inicio" name="txt-fecha-inicio" value="dd-mm-yyyy" type="date">
                    </div>
                </div>

                <div class="row justify-content-center mg-t-10">
                    <div align='center' class="col-1">
                        <strong>Fecha fin</strong>
                    </div>
                    <div align='left' class="col-4">
                        <input class="form-control mb-2" placeholder="Select a date" id="txt-fecha-fin" name="txt-fecha-fin" value="dd-mm-yyyy" type="date">
                    </div>
                </div>

                <div class="row justify-content-center mg-t-20">
                    <div align='center' class="col-1 mg-t-10">
                        <strong></strong>
                    </div>
                    <div align='right' class="col-4">
                        <a class="btn background-btn-nuevo pad-nu margin-top-bu" id="btn-reporte-empleado" onclick="get_reportes_permisos()">
                            <i class="fa fa-search color-btn-nuevo"><strong class="color-btn-nuevo">
                                    Buscar</strong></i>

                        </a>
                    </div>
                </div>
                <div id="div-file" class="none marg">
                    <a target="_blank" onclick="pdf_reporte_solicitud()"><i class='fa fa-file-pdf tam-pdf'></i></a>
                    <a target="_blank" onclick="excell_reporte_solicitud()"><i class=" far fa-file-excel tam-excell"></i></a>
                </div>
                <div id="div-table-reporte-solicitud"></div>
            </div>

        </div>
    </div>
</div>
@endsection

@section('js')
<script src='https://cdn.jsdelivr.net/npm/@fullcalendar/core@6.1.8/locales-all.global.min.js'></script>
<script src='/js/Reporte/reporte_solicitudes.js'></script>

@endsection
@else
<script>
    location.href = "/";
</script>


@endif