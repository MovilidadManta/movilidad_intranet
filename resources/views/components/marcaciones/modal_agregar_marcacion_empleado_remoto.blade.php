<div class="modal" id="{{$idModalRegistrarEmpleadoRemoto}}">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content modal-content-demo">
            <div class="modal-header">
                <h1 class="modal-title" id="title_{{$idModalRegistrarEmpleadoRemoto}}">Registar Marcación</h1>
            </div>
            <div class="modal-body">
                <input
                    type="hidden"
                    name="csrf-token"
                    value="{{csrf_token()}}"
                    id="csrf_token_{{$idModalRegistrarEmpleadoRemoto}}"
                >
                <form
                    class="form"
                    novalidate
                    id="form_{{$idModalRegistrarEmpleadoRemoto}}"
                    method="POST"
                >
                    <input type="hidden" name="cer_id" id="cer_id_{{$idModalRegistrarEmpleadoRemoto}}">
                    <div class="form-group">
                        <label class="main-content-label tx-11 tx-medium tx-gray-600">
                            TIPO MARCACIÓN
                        </label>
                        <div class="pos-relative">
                            <select id="select_tipo_marcacion_{{$idModalRegistrarEmpleadoRemoto}}" name="me_tipo_marcacion" class="form-select">
                                <option value="1">ENTRADA</option>
                                <option value="2">SALIDA AL ALMUERZO</option>
                                <option value="3">ENTRADA DEL ALMUERZO</option>
                                <option value="4">SALIDA</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="main-content-label tx-11 tx-medium tx-gray-600">
                            CAMARA
                        </label>
                        <div class="pos-relative">
                            <select id="select_camara_{{$idModalRegistrarEmpleadoRemoto}}" class="form-select">
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="main-content-label tx-11 tx-medium tx-gray-600">
                            FOTO
                        </label>
                        <div class="pos-relative text-center">
                            <!-- Vista previa de la cámara -->
                            <video id="video_{{$idModalRegistrarEmpleadoRemoto}}" class="camera_video" width="450" height="320" autoplay playsinline muted></video>
                            
                            <!-- Canvas oculto para tomar la foto -->
                            <canvas id="canvas_{{$idModalRegistrarEmpleadoRemoto}}" width="320" height="240" style="display:none;"></canvas>

                            <!-- Imagen capturada -->
                            <img id="photo_{{$idModalRegistrarEmpleadoRemoto}}" class="oculto" src="" alt="Tu foto aparecerá aquí" height="320"/>
                            <input type="hidden" name="foto_empleado" id="input_foto_{{$idModalRegistrarEmpleadoRemoto}}">
                            <span class="badge bg-danger" data-for="input_foto_{{$idModalRegistrarEmpleadoRemoto}}" style="display: none;"></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="pos-relative text-center">
                            <button type="button" id="btn_tomar_foto_{{$idModalRegistrarEmpleadoRemoto}}" class="btn btn-info mt-2" style="display: inline-block;">
                                <i class="fa fa-camera-retro"></i> Tomar Foto
                            </button>
                            <button type="button" id="btn_nueva_foto_{{$idModalRegistrarEmpleadoRemoto}}" class="btn btn-success mt-2 oculto" style="display: inline-block;">
                                <i class="fa fa-plus"></i> Nueva Foto
                            </button>
                        </div>
                    </div> 
                </form>
            </div>
            <div class="modal-footer">
                <button class="btn btn-success-gradient btn-movi" id="btn_registar_marcacion_empleado_remoto" type="button"><i class="fa fa-save"></i> Guardar</button>
                <button class="btn ripple btn-dark-gradient" data-bs-dismiss="modal" type="button">
                    <i class="fas fa-times"></i> Salir
                </button>
            </div>
        </div>
    </div>
</div>