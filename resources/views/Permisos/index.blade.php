@if (Session::get('nombres'))
@extends('Layout.app_index')
@section('css')
<script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/index.global.min.js"></script>
<style>
    .fc .fc-scrollgrid-liquid {
        height: 80vh !important;
    }

    .is-today {
        background: #9ac7ed;
    }

    .m-l1 {
        margin-left: 1em;
    }

    .r_obl {
        color: #F44336;
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
<input type="hidden" id="a_permisos" value="{{ $permisos }}">
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
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div>
                            <h3>Solicitud de permiso</h3>
                            <input type="hidden" id="et_estado_documento">
                            <input type="hidden" id="et_estado_permisoxhora">
                            <input type="hidden" id="et_estado_enfermedad">
                            <div id="c_p_nota" style="display: none;" class="alert alert-warning" role="alert">
                                <div class="d-flex">
                                    <div>
                                        <!-- Download SVG icon from http://tabler-icons.io/i/alert-triangle -->
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon alert-icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path d="M10.24 3.957l-8.422 14.06a1.989 1.989 0 0 0 1.7 2.983h16.845a1.989 1.989 0 0 0 1.7 -2.983l-8.423 -14.06a1.989 1.989 0 0 0 -3.4 0z">
                                            </path>
                                            <path d="M12 9v4"></path>
                                            <path d="M12 17h.01"></path>
                                        </svg>
                                    </div>
                                    <div>
                                        <h4 class="alert-title">Nota:</h4>
                                        <div id="p_nota" class="text-secondary"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Empleado:</label>
                            <div class="form-control-plaintext">{{ Session::get('nombres') }}
                                {{ Session::get('apellidos') }}
                            </div>
                            <input type="hidden" value="{{ Session::get('cedula') }}" id="et_cedula_s">
                            <input type="hidden" value="{{ $intervalMesesf }}" id="et_meses_servicio">
                            <input type="hidden" value="{{ $fecha_actual }}" id="fecha_actual">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Tipo de permiso <span class="r_obl">(*)</span>:</label>
                            <select id="sel_tipo_permiso" onchange="conf_permiso(this)" class="form-select">
                                <option value="0">Seleccione un tipo de permiso</option>
                                @foreach ($permisos as $p)
                                <option value="{{ $p->id }}" data-dias="{{ $p->dias_maximo_presentacion }}">{{ $p->tipo_permiso }} </option>
                                @endforeach
                            </select>
                            
                        </div>
                        <div class="mb-3">
                            <div class="row">
                                <div class="col-6">
                                    <label class="form-label">Desde<span class="r_obl">(*)</span>:</label>
                                    <input type="date" id="et_desde" class="form-control">
                                </div>
                                <div class="col-6">
                                    <label class="form-label">Hasta<span class="r_obl">(*)</span>:</label>
                                    <input type="date" id="et_hasta" class="form-control" onchange="validad_dias()">
                                </div>
                            </div>
                        </div>

                        <div class="mb-3" id="c_p_hora" style="display: none;">
                            <div class="row">
                                <div class="col-6">
                                    <label class="form-label">Hora inicio<span class="r_obl">(*)</span>:</label>
                                    <input type="time" id="et_h_inicio" class="form-control">
                                </div>
                                <div class="col-6">
                                    <label class="form-label">Hora fin:<span class="r_obl">(*)</span></label>
                                    <input type="time" id="et_h_final" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="mb-3" id="c_p_entidad_enfermedad" style="display: none;">
                            <div class="form-label">Entidad que certifica: <span class="r_obl">(*)</span></div>
                            <select id="sel_entidad_enfermedad" class="form-select">
                                <option value="0">SELECCIONE UNA ENTIDAD</option>
                                <option value="1">IESS</option>
                                <option value="2">PARTICULAR</option>
                                <option value="3">MINISTERIO DE SALUD</option>
                            </select>
                            <span class="badge bg-danger" id="badge_sel_entidad_enfermedad" data-for="sel_entidad_enfermedad"></span>
                        </div>
                        <div class="mb-3" id="c_p_enfermedad" style="display: none;">
                            <div class="form-label">Diagnóstico: <span class="r_obl">(*)</span></div>
                            <input type="text" id="tipo_enfermedad" data-label='Diagnóstico' class="form-control" placeholder="DÍGITE EL CODIGO CIE10 O SU ENFERMEDAD">
                            <span class="badge bg-danger" id="badge_tipo_enfermedad" data-for="tipo_enfermedad"></span>
                        </div>
                        <div class="mb-3" id="c_p_documento" style="display: none;">
                            <div class="form-label">Subir un justificativo (documento pdf): <span class="r_obl">(*)</span></div>
                            <input type="file" id="document" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Observación: <span class="form-label-description"><span id="num">0</span>/100</span></label>
                            <textarea class="form-control" id="et_observacion" rows="6" onkeyup="contar_caracteres(this)" placeholder="detalle información de su permiso ().."></textarea>
                        </div>
                        <div id="span_documento_firmado" style="display: none;" class="alert alert-success" role="alert">
                            <div class="d-flex">
                                <div>
                                    <!-- Download SVG icon from http://tabler-icons.io/i/check -->
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon alert-icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M5 12l5 5l10 -10"></path>
                                    </svg>
                                </div>
                                <div>
                                    El permiso está firmado <span id="permiso_doc"></span>

                                </div>
                                <input type="hidden" value="" id="ip_url_formulario">

                            </div>
                        </div>
                        <div class="col-6 col-sm-4 col-md-2 col-xl-auto py-3">
                            <button onclick="vistaprevia()" id="btn_vista_previa" class="btn btn-flickr w-100">
                                <i class="fa-solid fa-eye"></i>
                                <span class="m-l1">Vista Previa</span>
                            </button>
                        </div>
                        <div class="col-6 col-sm-4 col-md-2 col-xl-auto py-3">
                            <button onclick="firmar_documento()" id="btn_firmar_permiso" class="btn btn-flickr w-100" disabled>
                                <i class="fa-solid fa-pencil"></i>
                                <span class="m-l1">Firmar Permiso</span>
                            </button>
                        </div>
                        <div class="col-6 col-sm-4 col-md-2 col-xl-auto py-3">
                            <button onclick="enviar_permiso()" id="btn_enviar_permiso" class="btn btn-flickr w-100" disabled>
                                <i class="fa-regular fa-paper-plane"></i>
                                <span class="m-l1">Enviar solicitud</span>
                            </button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<x-generico.error_emergent idModal="modal-error" btnCloseText="Intente nuevamente" messageError="">
</x-generico.error_emergent>
<x-generico.error_emergent idModal="modal_fecha_error" btnCloseText="Cerrar" messageError="">
</x-generico.error_emergent>
<div class="modal modal-blur fade" id="modal_permiso_ok" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
        <div class="modal-content">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            <div class="modal-status bg-success"></div>
            <div class="modal-body text-center py-4">
                <!-- Download SVG icon from http://tabler-icons.io/i/circle-check -->
                <svg xmlns="http://www.w3.org/2000/svg" class="icon mb-2 text-green icon-lg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />
                    <path d="M9 12l2 2l4 -4" />
                </svg>
                <h3>Su permiso se ha registrado!</h3>
                <div class="text-secondary">Su permiso se encuentra en la bandeja de su jefe <span id='aprobador'></span></div>

            </div>
            <div class="modal-footer">
                <div class="w-100">
                    <div class="row">

                        <div class="col"><a href="#" class="btn btn-success w-100" onclick="cerrar_modal_per()">
                                Aceptar
                            </a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal modal-blur fade" id="modal_vista_previa" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            <div class="modal-status bg-success"></div>
            <div class="modal-body text-center py-4">

                <iframe id="vistaPrevia" style=" width: 100%; height: 100vh; "></iframe>
            </div>
            <div class="modal-footer">
                <div class="w-100">
                    <div class="row">

                        <div class="col"><a href="#" class="btn btn-success w-100" onclick="cerrar_modal_per()">
                                Aceptar
                            </a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal modal-blur fade" id="modal_aprobar_code" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
        <div class="modal-content">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            <div class="modal-status bg-success"></div>
            <div class="modal-body text-center py-4">
                <div class="mb-3">
                    <label class="form-label">Codigo de autorización</label>
                    <p>Por favor revise su correo institucional el código de autorización</p>
                    <input type="text" class="form-control" id="ip_codigo_a" placeholder="Escriba su código de autorización">
                </div>
            </div>
            <div class="modal-footer">
                <div class="w-100">
                    <div class="row">

                        <div class="col"><button class="btn btn-success w-100" id="btn_ap_firma" onclick="aprobar_firma()">
                                Estampar código
                            </button></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
<script src="https: //cdn.jsdelivr.net/npm/fullcalendar@6.1.8/index.global.min.js"></script>
<script src='https://cdn.jsdelivr.net/npm/@fullcalendar/web-component@6.1.8/index.global.min.js'></script>
<script src='https://cdn.jsdelivr.net/npm/@fullcalendar/daygrid@6.1.8/index.global.min.js'></script>
<script src='https://cdn.jsdelivr.net/npm/@fullcalendar/core@6.1.8/locales-all.global.min.js'></script>

<script src='/js/Permisos/permisos.js?v=20251017'> 
</script>
@endsection
@else
<script>
    location.href = "/";
</script>


@endif