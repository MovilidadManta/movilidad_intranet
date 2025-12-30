<div class="modal" id="{{$idModalHistorialMarcaciones}}">
    <div class="modal-dialog modal-full" role="document">
        <div class="modal-content modal-content-demo">
            <div class="modal-header">
                <h1 class="modal-title">Marcaciones Empleados</h1>
                <button
                    aria-label="Close"
                    class="close"
                    data-bs-dismiss="modal"
                    type="button"
                >
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="row justify-content-start">
                        <div class="col-xs-4 col-md-1 mg-t-10">
                            <strong>Fecha Inicio</strong>
                        </div>
                        <div class="col-xs-8 col-md-2">
                            <input class="form-control" name="select_fecha_inicio" id="select_fecha_inicio_{{$idModalHistorialMarcaciones}}"
                                type="date">
                        </div>
                        <div class="col-xs-4 col-md-1 mg-t-10">
                            <strong>Fecha Fin</strong>
                        </div>
                        <div class="col-xs-8 col-md-2 mg-b-10">
                            <input class="form-control" name="select_fecha_fin" id="select_fecha_fin_{{$idModalHistorialMarcaciones}}"
                                type="date">
                        </div>
                        <div class="col-xs-12 col-md-2 text-end">
                            <a class="btn background-btn-nuevo pad-nu" id="btn_search_marcaciones_{{$idModalHistorialMarcaciones}}">
                                <i class="fa fa-search color-btn-nuevo"></i>
                                <strong class="color-btn-nuevo">Buscar</strong>
                            </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="table-responsive">
                            <div id="div_table_marcaciones_empleado_{{$idModalHistorialMarcaciones}}">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>