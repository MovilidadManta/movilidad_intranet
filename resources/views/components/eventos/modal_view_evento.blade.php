<div class="modal" id="modal_view_evento">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content modal-content-demo">
            <div class="modal-header">
                <h6 class="modal-title">Ver Evento</h6>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="col-md-12 col-lg-12 col-xl-12 mx-auto d-block bus-emp-bo">
                    <div class="form-group">
                        <label class="main-content-label tx-11 tx-medium tx-gray-600">
                            TITULO
                        </label>
                        <div class="pos-relative">
                            <input class="form-control pd-r-80" type="text" id="txt-titulo" readonly>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="main-content-label tx-11 tx-medium tx-gray-600">
                            EVENTO
                        </label>
                        <div class="pos-relative">
                            <textarea class="form-control" id="txt-evento" rows="3" readonly></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <div style="text-align:center; margin-top:10px;">
                            <img id="imagen_cargada" src="" alt="Imagen Previa" style="max-height: 500px;" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn w-100" data-bs-dismiss="modal" type="button"><i class="fas fa-times" style="margin-right: 3px;"></i> Salir</button>
            </div>
        </div>
    </div>
</div>