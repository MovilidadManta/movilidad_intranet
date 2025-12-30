@extends('Layout.app_index')
@section('css')
    <link href="{{ asset('css/cuestionario.css') }}" rel="stylesheet" />
    <style>
        #btns_pdf_formulario{
            display: flex;
            justify-content: center;
            align-items: center;
        }
        #btn_abrir_otro_formulario{
            margin-right: 5px;
        }
        #btns_guardar_formulario{
            display: flex;
            justify-content: center;
            align-items: center;
        }
        #btn_guardar_formulario{
            margin-right: 5px;
        }
        #tiempo_prueba{
            display: flex;
            justify-content: end;
            font-size: 18px;
            font-weight: bold;
        }
    </style>
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="bo-bac" role="alert">
                    <div class="card-title">
                        @foreach($proyecto as $p)
                        <h1 class="text-dark font-weight-bold mt-2 mb-2 mr-5">{{$p->proyecto}}</h1>
                        @endforeach
                    </div>
                </div>

                <!--begin::Card-->
                <div class="card card-custom card-stretch borde form-sha-home">
                    <div class="card-body" id="body_formulario" style="display: none;">
                        <input type="hidden" id="ip_proyecto" value="{{$id}}">
                        <input type="hidden" name="csrf-token" value="{{csrf_token()}}" id="token">
                        <form id="frmDatos">
                            @if(sizeof($preguntas)==0)
                                <div><p>Formulario no se han cargado las preguntas</p></div>
                            @else
                                <div id="tiempo_prueba">
                                    <span>Tiempo restante: <span id="time_prueba"></span> minutos.</span>
                                </div>
                                @foreach($preguntas as $i => $p)
                                    @if($p->tipo=="P")
                                    <div class="form-group">
                                        <label class="text-dark-75 font-weight-bolder font-size-lg mb-0"> <span><strong>{{$loop->index + 1}})</strong></span> ¿{{$p->pregunta}}?</label>
                                        @foreach($opciones as $o => $op)
                                            @if($p->id == $op->id_pregunta)
                                                @foreach($tipo as $ti => $t)
                                                    @if($p->id_tipo == $t->id)
                                                        <!--<label for=""><strong>{{$p->id_tipo}}::{{$t->id}}</strong></label>-->
                                                        @if($t->value == 'radio')
                                                            <div class="radio-list">
                                                                <label class="radio">
                                                                    <input class="question_radio" type="radio" id="{{$p->id}}" name="radios{{$p->id}}" onchange="buscar_preguntas({{$op->id}},{{$p->id}})" value="{{$op->id}}" {{$op->id == $p->id_opcion ? 'checked' : ''}}>
                                                                    <span></span>{{$op->opcion}}
                                                                </label>
                                                            </div>
                                                        @elseif($t->value == 'check')
                                                            <div class="checkbox-list">
                                                                <label class="checkbox">
                                                                    <input class="question_checkbox" type="checkbox" id="{{$p->id}}" name="Checkboxes{{$p->id}}" value="{{$op->id}}">
                                                                    <span></span>{{$op->opcion}}
                                                                </label>
                                                            </div>
                                                        @endif
                                                    @endif
                                                @endforeach
                                            @endif
                                        @endforeach
            
                                        @if($p->id_tipo == 1 || $p->id_tipo == 4 || $p->id_tipo == 5 || $p->id_tipo == 6  )
                                            @foreach($tipo as $t)
                                                @if($p->id_tipo == $t->id)
                                                    @if($t->value == 'text')
                                                        <input type="text" class=" text_d form-control" id="{{$p->id}}" placeholder="Ingrese la respuesta">
                                                    @elseif($t->value == 'date')
                                                        <input type="date" class=" text_d form-control" id="{{$p->id}}" placeholder="Ingrese la respuesta">
                                                    @elseif($t->value == 'textarea')
                                                        <textarea class=" text_d form-control" id="{{$p->id}}" name="{{$p->id}}" rows="3" placeholder="Ingrese la respuesta"></textarea>
                                                    @elseif($t->value == 'hora')
                                                        <input type="time" class=" text_d form-control" id="{{$p->id}}" placeholder="Ingrese la respuesta">
                                                    @endif
                                                @endif
                                            @endforeach
                                        @endif
                                        <input id="txt_p_id" type="hidden" value ="{{$proyecto[0]->id}}" />
                                        <!--<input type="text" class="form-control col-lg-4" id="ip_observacion_{{$p->id}}" name="" value="">-->
            
                                        @if($p->estado_preguntas == 1)
                                            <label for=""><strong>Observación:</strong></label>
                                            <input type="text" class="form-control col-lg-4" id="ip_observacion_{{$p->id}}" name="" value="">
                                        @endif
            
                                        <div id="form_subpregunta_{{$p->id}}" class="col-md-11">
            
                                        </div>
                                    </div>
                                    @endif
                                @endforeach
                            @endif
                        </form>
                    </div>
                    <div class="card-footer" id="btns_guardar_formulario" style="display: none;">
                        <button type="reset" class="btn btn-primary mr-2" id="btn_guardar_formulario"><i class="fa fa-floppy-o" aria-hidden="true"></i> &nbsp; Guardar revisión</button>
                        <button type="reset" class="btn btn-secondary" id="btn_cancelar_formulario"><i class="fa fa-backward" aria-hidden="true"></i> &nbsp; Regresar</button>
                    </div>

                    <div class="card-body" id="pdf_formulario" style="display: none;">
                        <iframe id="pdf_formulario_view" src="" style="width: 100%; height: 70vh;"></iframe>
                    </div>
                    <div class="card-footer" id="btns_pdf_formulario" style="display: none;">
                        <button type="reset" class="btn btn-info mr-2" id="btn_abrir_otro_formulario"><i class="fa fa-eye" aria-hidden="true"></i> &nbsp; Abrir en otra pestaña</button>
                        <button type="reset" class="btn btn-primary mr-2" id="btn_regresar_formulario"><i class="fa fa-backward" aria-hidden="true"></i> &nbsp; Regresar</button>
                    </div>
                </div>
                <!--end::Card-->
            </div>
        </div>
        <!--row-->
    
    </div>

<x-generico.confirmation_emergent idModal="modal_confirm_send_formulario" idBtnConfirm="btn_confirm_send_formulario" idBtnCancel="btn_cancel_send_formulario" message="Esta seguro de concluir la prueba?">
</x-generico.confirmation_emergent>

<x-generico.confirmation_emergent_yes idModal="modal_confirm_close_formulario" idBtnConfirm="btn_confirm_close_formulario" idMessage="message_close">
</x-generico.confirmation_emergent_yes>

@endsection

@section('js')
    <script type='text/javascript' src='/js/Formularios/formulario.js'></script>
@endsection