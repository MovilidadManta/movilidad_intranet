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
</style>
@endsection

@section('content')
<div id="cont_preload">
    <div class="container-xl">
        <div class="row row-cards">
            <div class="col-3">
                <div class="card placeholder-glow">
                    <div class="ratio ratio-21x9 card-img-top placeholder"></div>
                    <div class="card-body" style="height: 10em;">
                        <div class="placeholder col-9 mb-3"></div>
                        <div class="placeholder placeholder-xs col-10"></div>
                        <div class="placeholder placeholder-xs col-11"></div>
                        <div class="mt-3">
                            <a href="#" tabindex="-1" class="btn btn-primary disabled placeholder col-4"
                                aria-hidden="true"></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card placeholder-glow">
                    <div class="ratio ratio-21x9 card-img-top placeholder"></div>
                    <div class="card-body" style="height: 10em;">
                        <div class="placeholder col-9 mb-3"></div>
                        <div class="placeholder placeholder-xs col-10"></div>
                        <div class="placeholder placeholder-xs col-11"></div>
                        <div class="mt-3">
                            <a href="#" tabindex="-1" class="btn btn-primary disabled placeholder col-4"
                                aria-hidden="true"></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card placeholder-glow">
                    <div class="ratio ratio-21x9 card-img-top placeholder"></div>
                    <div class="card-body" style="height: 10em;">
                        <div class="placeholder col-9 mb-3"></div>
                        <div class="placeholder placeholder-xs col-10"></div>
                        <div class="placeholder placeholder-xs col-11"></div>
                        <div class="mt-3">
                            <a href="#" tabindex="-1" class="btn btn-primary disabled placeholder col-4"
                                aria-hidden="true"></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card placeholder-glow">
                    <div class="ratio ratio-21x9 card-img-top placeholder"></div>
                    <div class="card-body" style="height: 10em;">
                        <div class="placeholder col-9 mb-3"></div>
                        <div class="placeholder placeholder-xs col-10"></div>
                        <div class="placeholder placeholder-xs col-11"></div>
                        <div class="mt-3">
                            <a href="#" tabindex="-1" class="btn btn-primary disabled placeholder col-4"
                                aria-hidden="true"></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="row row-cards">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body" style="height: 10em;">
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
                            <div class="card-body" style="height: 10em;">
                                <div class="placeholder col-9 mb-3"></div>
                                <div class="placeholder placeholder-xs col-10"></div>
                                <div class="placeholder placeholder-xs col-11"></div>
                                <div class="mt-3">
                                    <a href="#" tabindex="-1" class="btn btn-primary disabled placeholder col-4"
                                        aria-hidden="true"></a>
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
                                    <div class="card-body" style="height: 10em;">
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

<div id="cont_calendar" style="display: block; height: auto;
" class="container-xl">
    <div class="row g-4">
        <div class="col-md-3">
            <div class="mb-3">
                <label class="form-label">Calendario</label>
                <div class="datepicker-inline" id="datepicker-inline"></div>
            </div>
            <div class="card">
                <div class="card-body" style="height: 10em;">
                    <span style="display: flex;    justify-content: center;">
                        <p class="reloj" id="reloj"></p>
                    </span>
                </div>
            </div>
            <div class="card">
                <div class="card-body" style="height: 10em;">
                    <div id="user_connetion" class="row g-3">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-9">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <h2 class="page-title">
                        Extensiones telefonicas DTM : 3701295
                    </h2>
                </div>

                <div class="container">
                    <div class="row">
                        <div class="col-3">
                            <div class="card">
                                <div class="card-status-start bg-primary"></div>
                                <div class="card-body" style="height: 10em;">
                                    <h3 class="card-title">Director</h3>
                                    <p class="text-muted">
                                    <div class="flex">
                                        <i class="fa-solid fa-phone"></i>
                                        <p class="ma_p">800</p>
                                    </div>
                                    <div class="flex">
                                        <i class="fa-solid fa-user"></i>
                                        <p class="ma_p"> ABG. JOSEPH LEON</p>
                                    </div>
                                    </ul>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="card">
                                <div class="card-status-start bg-primary"></div>
                                <div class="card-body" style="height: 10em;">
                                    <h3 class="card-title">Secretaria General</h3>
                                    <p class="text-muted">
                                    <div class="flex">
                                        <i class="fa-solid fa-phone"></i>
                                        <p class="ma_p">801</p>
                                    </div>
                                    <div class="flex">
                                        <i class="fa-solid fa-user"></i>
                                        <p class="ma_p">ERICK MACIAS</p>
                                    </div>
                                    </ul>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="card">
                                <div class="card-status-start bg-primary"></div>
                                <div class="card-body" style="height: 10em;">
                                    <h3 class="card-title">Citaciones</h3>
                                    <p class="text-muted">
                                    <div class="flex">
                                        <i class="fa-solid fa-phone"></i>
                                        <p class="ma_p">803</p>
                                    </div>
                                    <div class="flex">
                                        <i class="fa-solid fa-user"></i>
                                        <p class="ma_p"> PAOLA CAROFILIS</p>
                                    </div>
                                    </ul>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="card">
                                <div class="card-status-start bg-primary"></div>
                                <div class="card-body" style="height: 10em;">
                                    <h3 class="card-title">Operativos</h3>
                                    <p class="text-muted">
                                    <div class="flex">
                                        <i class="fa-solid fa-phone"></i>
                                        <p class="ma_p">804</p>
                                    </div>
                                    <div class="flex">
                                        <i class="fa-solid fa-user"></i>
                                        <p class="ma_p"> BETZABETH MOREIRA</p>
                                    </div>
                                    </ul>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-3">
                            <div class="card">
                                <div class="card-status-start bg-primary"></div>
                                <div class="card-body" style="height: 10em;">
                                    <h3 class="card-title">Trabajo Social</h3>
                                    <p class="text-muted">
                                    <div class="flex">
                                        <i class="fa-solid fa-phone"></i>
                                        <p class="ma_p">806</p>
                                    </div>
                                    <div class="flex">
                                        <i class="fa-solid fa-user"></i>
                                        <p class="ma_p">ELIZABETH GODOY</p>
                                    </div>
                                    </ul>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-3">
                            <div class="card">
                                <div class="card-status-start bg-primary"></div>
                                <div class="card-body" style="height: 10em;">
                                    <h3 class="card-title">SubDirección de Matriculación</h3>
                                    <p class="text-muted">
                                    <div class="flex">
                                        <i class="fa-solid fa-phone"></i>
                                        <p class="ma_p">807</p>
                                    </div>
                                    <div class="flex">
                                        <i class="fa-solid fa-user"></i>
                                        <p class="ma_p"> RAMONA DELGADO</p>
                                    </div>
                                    </ul>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-3">
                            <div class="card">
                                <div class="card-status-start bg-primary"></div>
                                <div class="card-body" style="height: 10em;">
                                    <h3 class="card-title">Juridico</h3>
                                    <p class="text-muted">
                                    <div class="flex">
                                        <i class="fa-solid fa-phone"></i>
                                        <p class="ma_p">809</p>
                                    </div>
                                    <div class="flex">
                                        <i class="fa-solid fa-user"></i>
                                        <p class="ma_p"> ROXANA VELIZ</p>
                                    </div>
                                    </ul>
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="row g-2 align-items-center" style="margin-top: inherit;">
                <div class="col ">
                    <h2 class="page-title">
                        Extensiones telefonicas TTM
                    </h2>
                </div>

                <div class="container">
                    <div class="row">
                        <div class="col-3">
                            <div class="card">
                                <div class="card-status-start bg-primary"></div>
                                <div class="card-body" style="height: 10em;" style="height: 10em;">
                                    <h3 class="card-title">Gerencia</h3>
                                    <p class="text-muted">
                                    <div class="flex">
                                        <i class="fa-solid fa-phone"></i>
                                        <p class="ma_p">1000</p>
                                    </div>
                                    <div class="flex">
                                        <i class="fa-solid fa-user"></i>
                                        <p class="ma_p"> ABG. KENNY MUÑOS</p>
                                    </div>
                                    </ul>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="card">
                                <div class="card-status-start bg-primary"></div>
                                <div class="card-body" style="height: 10em;">
                                    <h3 class="card-title">Sala de reuniones</h3>
                                    <p class="text-muted">
                                    <div class="flex">
                                        <i class="fa-solid fa-phone"></i>
                                        <p class="ma_p">1001</p>
                                    </div>
                                    <div class="flex">
                                        <i class="fa-solid fa-user"></i>
                                        <p class="ma_p">Sala de reuniones</p>
                                    </div>
                                    </ul>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="card">
                                <div class="card-status-start bg-primary"></div>
                                <div class="card-body" style="height: 10em;">
                                    <h3 class="card-title">Recepción</h3>
                                    <p class="text-muted">
                                    <div class="flex">
                                        <i class="fa-solid fa-phone"></i>
                                        <p class="ma_p">1002</p>
                                    </div>
                                    <div class="flex">
                                        <i class="fa-solid fa-user"></i>
                                        <p class="ma_p"> Ing. Juan Lema</p>
                                    </div>
                                    </ul>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="card">
                                <div class="card-status-start bg-primary"></div>
                                <div class="card-body" style="height: 10em;">
                                    <h3 class="card-title">Comercialización y Mercadeo</h3>
                                    <p class="text-muted">
                                    <div class="flex">
                                        <i class="fa-solid fa-phone"></i>
                                        <p class="ma_p">1003</p>
                                    </div>
                                    <div class="flex">
                                        <i class="fa-solid fa-user"></i>
                                        <p class="ma_p">Ing Santiago Alcivar</p>
                                    </div>
                                    </ul>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-3">
                            <div class="card">
                                <div class="card-status-start bg-primary"></div>
                                <div class="card-body" style="height: 10em;">
                                    <h3 class="card-title">Sistema y Tecnología</h3>
                                    <p class="text-muted">
                                    <div class="flex">
                                        <i class="fa-solid fa-phone"></i>
                                        <p class="ma_p">1004-1005</p>
                                    </div>
                                    <div class="flex">
                                        <i class="fa-solid fa-user"></i>
                                        <p class="ma_p">Ing. Freddy Cedeño</p>
                                    </div>
                                    </ul>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-3">
                            <div class="card">
                                <div class="card-status-start bg-primary"></div>
                                <div class="card-body" style="height: 10em;">
                                    <h3 class="card-title">Talento Humano</h3>
                                    <p class="text-muted">
                                    <div class="flex">
                                        <i class="fa-solid fa-phone"></i>
                                        <p class="ma_p">1007-1009</p>
                                    </div>
                                    <div class="flex">
                                        <i class="fa-solid fa-user"></i>
                                        <p class="ma_p">Ing. Freddy Cedeño</p>
                                    </div>
                                    </ul>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-3">
                            <div class="card">
                                <div class="card-status-start bg-primary"></div>
                                <div class="card-body" style="height: 10em;">
                                    <h3 class="card-title">Contabilidad</h3>
                                    <p class="text-muted">
                                    <div class="flex">
                                        <i class="fa-solid fa-phone"></i>
                                        <p class="ma_p">1008</p>
                                    </div>
                                    <div class="flex">
                                        <i class="fa-solid fa-user"></i>
                                        <p class="ma_p">Danes Cedeño</p>
                                    </div>
                                    </ul>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-3">
                            <div class="card">
                                <div class="card-status-start bg-primary"></div>
                                <div class="card-body" style="height: 10em;">
                                    <h3 class="card-title">Dto. técnico</h3>
                                    <p class="text-muted">
                                    <div class="flex">
                                        <i class="fa-solid fa-phone"></i>
                                        <p class="ma_p">1010</p>
                                    </div>
                                    <div class="flex">
                                        <i class="fa-solid fa-user"></i>
                                        <p class="ma_p">Rogerio Mieles</p>
                                    </div>
                                    </ul>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-3">
                            <div class="card">
                                <div class="card-status-start bg-primary"></div>
                                <div class="card-body" style="height: 10em;">
                                    <h3 class="card-title">Dto. de planificación</h3>
                                    <p class="text-muted">
                                    <div class="flex">
                                        <i class="fa-solid fa-phone"></i>
                                        <p class="ma_p">1012</p>
                                    </div>
                                    <div class="flex">
                                        <i class="fa-solid fa-user"></i>
                                        <p class="ma_p">Ing. Guillermo Mendoza</p>
                                    </div>
                                    </ul>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-3">
                            <div class="card">
                                <div class="card-status-start bg-primary"></div>
                                <div class="card-body" style="height: 10em;">
                                    <h3 class="card-title">Asesoria Juridica</h3>
                                    <p class="text-muted">
                                    <div class="flex">
                                        <i class="fa-solid fa-phone"></i>
                                        <p class="ma_p">1011</p>
                                    </div>
                                    <div class="flex">
                                        <i class="fa-solid fa-user"></i>
                                        <p class="ma_p">Ab. Carlos Julio</p>
                                    </div>
                                    </ul>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-3">
                            <div class="card">
                                <div class="card-status-start bg-primary"></div>
                                <div class="card-body" style="height: 10em;">
                                    <h3 class="card-title">Asesoria Juridica</h3>
                                    <p class="text-muted">
                                    <div class="flex">
                                        <i class="fa-solid fa-phone"></i>
                                        <p class="ma_p">1011</p>
                                    </div>
                                    <div class="flex">
                                        <i class="fa-solid fa-user"></i>
                                        <p class="ma_p">Ab. Carlos Julio</p>
                                    </div>
                                    </ul>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-3">
                            <div class="card">
                                <div class="card-status-start bg-primary"></div>
                                <div class="card-body" style="height: 10em;">
                                    <h3 class="card-title">Compras Públicas</h3>
                                    <p class="text-muted">
                                    <div class="flex">
                                        <i class="fa-solid fa-phone"></i>
                                        <p class="ma_p">1013</p>
                                    </div>
                                    <div class="flex">
                                        <i class="fa-solid fa-user"></i>
                                        <p class="ma_p">Ing. Isabel Ponce</p>
                                    </div>
                                    </ul>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-3">
                            <div class="card">
                                <div class="card-status-start bg-primary"></div>
                                <div class="card-body" style="height: 10em;">
                                    <h3 class="card-title">Financiero</h3>
                                    <p class="text-muted">
                                    <div class="flex">
                                        <i class="fa-solid fa-phone"></i>
                                        <p class="ma_p">1014</p>
                                    </div>
                                    <div class="flex">
                                        <i class="fa-solid fa-user"></i>
                                        <p class="ma_p">Econ. Natashcha Ponce</p>
                                    </div>
                                    </ul>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-3">
                            <div class="card">
                                <div class="card-status-start bg-primary"></div>
                                <div class="card-body" style="height: 10em;">
                                    <h3 class="card-title">Recaudación</h3>
                                    <p class="text-muted">
                                    <div class="flex">
                                        <i class="fa-solid fa-phone"></i>
                                        <p class="ma_p">1015</p>
                                    </div>
                                    <div class="flex">
                                        <i class="fa-solid fa-user"></i>
                                        <p class="ma_p">Ing. Mayra Aragundi</p>
                                    </div>
                                    </ul>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-3">
                            <div class="card">
                                <div class="card-status-start bg-primary"></div>
                                <div class="card-body" style="height: 10em;">
                                    <h3 class="card-title">Torre de Control - Monitoreo</h3>
                                    <p class="text-muted">
                                    <div class="flex">
                                        <i class="fa-solid fa-phone"></i>
                                        <p class="ma_p">1016 - 1017</p>
                                    </div>
                                    <div class="flex">
                                        <i class="fa-solid fa-user"></i>
                                        <p class="ma_p">Franklin Peralta</p>
                                    </div>
                                    </ul>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-3">
                            <div class="card">
                                <div class="card-status-start bg-primary"></div>
                                <div class="card-body" style="height: 10em;">
                                    <h3 class="card-title">Torre de Control - Jefe de Operaciones</h3>
                                    <p class="text-muted">
                                    <div class="flex">
                                        <i class="fa-solid fa-phone"></i>
                                        <p class="ma_p">1019</p>
                                    </div>
                                    <div class="flex">
                                        <i class="fa-solid fa-user"></i>
                                        <p class="ma_p">David Moreira</p>
                                    </div>
                                    </ul>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!--<div class="col-3">
                            <div class="card">
                                <div class="card-status-start bg-primary"></div>
                                <div class="card-body" style="height: 10em;">
                                    <h3 class="card-title">Casetas de cobro Gran Aki</h3>
                                    <p class="text-muted">
                                    <div class="flex">
                                        <i class="fa-solid fa-phone"></i>
                                        <p class="ma_p">1020</p>
                                    </div>
                                    <div class="flex">
                                        <i class="fa-solid fa-user"></i>
                                        <p class="ma_p">Gran Aki</p>
                                    </div>
                                    </ul>
                                    </p>
                                </div>
                            </div>
                        </div>-->

                        <!--<div class="col-3">
                            <div class="card">
                                <div class="card-status-start bg-primary"></div>
                                <div class="card-body" style="height: 10em;">
                                    <h3 class="card-title">Casetas de cobro - Puerto Aereopuerto</h3>
                                    <p class="text-muted">
                                    <div class="flex">
                                        <i class="fa-solid fa-phone"></i>
                                        <p class="ma_p">1021</p>
                                    </div>
                                    <div class="flex">
                                        <i class="fa-solid fa-user"></i>
                                        <p class="ma_p">Puerto Aereopuerto</p>
                                    </div>
                                    </ul>
                                    </p>
                                </div>
                            </div>
                        </div>-->

                        <!--<div class="col-3">
                            <div class="card">
                                <div class="card-status-start bg-primary"></div>
                                <div class="card-body" style="height: 10em;">
                                    <h3 class="card-title">Isla Información</h3>
                                    <p class="text-muted">
                                    <div class="flex">
                                        <i class="fa-solid fa-phone"></i>
                                        <p class="ma_p">1022</p>
                                    </div>
                                    <div class="flex">
                                        <i class="fa-solid fa-user"></i>
                                        <p class="ma_p">Puerto Aereopuerto</p>
                                    </div>
                                    </ul>
                                    </p>
                                </div>
                            </div>
                        </div>-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('js')
<script>
$(window).on("load", func tion() {


            use strict etTimeout(func tion(
                        /$(".loader").addClass('loaded                    ("#cont_preload").hide                ("#cont_calendar").show                iew_calendar(), 1200        });

                        d ocument.addEventListener("DOMContentLoaded", func tion(indow.Litepicker && (
                                    new Litepicke lement: document.getElementById(
                                        'datepicker-inline                uttonText                    reviousMonth: `<!-- Download SVG icon from http://tabler-icons.io/i/chevron-left --> <
                                        svg xmlns = "http://www.w3.org/2000/svg"
                                        class = "icon"
                                        width = "24"
                                        height = "24"
                                        viewBox = "0 0 24 24"
                                        stroke - width = "2"
                                        stroke = "currentColor"
                                        fill = "none"
                                        stroke - linecap = "round"
                                        stroke - linejoin = "round" >
                                        <
                                        path stroke = "none"
                                        d = "M0 0h24v24H0z"
                                        fill = "none" / >
                                        <
                                        path d = "M15 6l-6 6l6 6" / >
                                        <
                                        /svg                    extMonth: `<!-- Download SVG icon from http:/ / tabler -
                                        icons.io / i / chevron - right-- >
                                        <
                                        svg xmlns = "http://www.w3.org/2000/svg"
                                        class = "icon"
                                        width = "24"
                                        height = "24"
                                        viewBox = "0 0 24 24"
                                        stroke - width = "2"
                                        stroke = "currentColor"
                                        fill = "none"
                                        stroke - linecap = "round"
                                        stroke - linejoin = "round" >
                                        <
                                        path stroke = "none"
                                        d = "M0 0h24v24H0z"
                                        fill = "none" / >
                                        <
                                        path d = "M9 6l6 6l-6 6" / >
                                        <
                                        /svg>`,
                                        nlineMode: true,
                                    });
</script>

@endsection
@else
<script>
l ocation.href = "/";
</script>
@endif