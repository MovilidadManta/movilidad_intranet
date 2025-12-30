@if (Session::get('nombres'))
    @extends('Layout.app_index')
    @section('css')
        <link href="{{ asset('css/cuestionario.css') }}" rel="stylesheet" />
        <style>
            .font_status{
                font-size: 14px;
            }
        </style>
    @endsection

    @section('content')
        <div class="d-flex flex-column-fluid mb-3">
            <div class="container">
                
                <div class="row">
                    @foreach($formularios as $f)
                    <!--begin::Column-->
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                        <!--begin::Card-->
                        <div class="card card-custom gutter-b card-stretch">
                            <!--begin::Body-->
                            <div class="card-body text-center pt-4 shaw">
                                <!--begin::Toolbar-->
                                <div class="d-flex justify-content-end">
                                </div>
                                <!--end::Toolbar-->
                                <!--begin::User-->
                                <div class="mt-7">
                                    <div class="symbol symbol-circle symbol-lg-90">
                                        <img src="{{asset('img/list.png')}}" alt="image">
                                    </div>
                                </div>
                                <!--end::User-->
                                <!--begin::Name-->
                                <div class="my-4">
                                    <a href="#" class="text-dark font-weight-bold text-hover-primary font-size-h4">{{$f->proyecto}}</a>
                                </div>
                                <!--end::Name-->
                                @if(!isset($f->estado_prueba))
                                <!--begin::Label-->
                                <span class="btn btn-text btn-success btn-sm font-weight-bold font_status">Pendiente</span>
                                @endif

                                @if($f->estado_prueba == true)
                                <!--begin::Label-->
                                <span class="btn btn-text btn-info btn-sm font-weight-bold font_status">Finalizada</span>
                                @endif

                                @if(isset($f->estado_prueba) && $f->estado_prueba == false)
                                <!--begin::Label-->
                                <span class="btn btn-text btn-warning btn-sm font-weight-bold font_status">En proceso</span>
                                @endif
                                
                                @if($f->estado_prueba == true)
                                <!--begin::Label-->
                                    <div class="mt-1">
                                        <span>Calificación: {{$f->total_calificacion}}/{{$f->value_question * $f->number_questions}}</span>
                                    </div>
                                @endif
        
                                <!--end::Label-->
                                <!--begin::Buttons-->
                                <div class="mt-4">
                                    <a href="/" id="btn_abrir_proyecto" data-id="{{$f->id}}" data-proyecto="{{$f->proyecto}}" data-minutes="{{$f->minutes_test}}" data-id_usuario="{{$f->id_usuario}}" class="btn btn-light-primary font-weight-bolder btn-sm py-3 px-6 text-uppercase">Abrir proyecto</a>
                                </div>
                                <!--end::Buttons-->
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::Card-->
                    </div>
                    <!--end::Column-->
                    @endforeach
        
                </div>
            </div>
        </div>

        <x-generico.confirmation_emergent idModal="modal_confirm_open_formulario" idBtnConfirm="btn_confirm_open_formulario" idBtnCancel="btn_cancel_open_formulario" message="">
        </x-generico.confirmation_emergent>
    @endsection

    @section('js')
        <script type='text/javascript' src='/js/Formularios/index.js'></script>
    @endsection
@else
    <script>
        location.href = "/";
    </script>
@endif