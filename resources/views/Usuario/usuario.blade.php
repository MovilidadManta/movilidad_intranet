@if (Session::get('nombres'))
@extends('Layout.app_index')

@section('content')
<div class="page-body">
    <div class="container-xl contain">
        <h1>Correos de mis Compañeros</h1>
        <div class="card">
            <div class="card-body">
                <div class="col-12">
                    <div id="table-default" class="table-responsive">
                        <table class="table" id="table-usuario">
                            <thead class="background-thead display nowrap" align="center">
                                <tr>
                                    <th align="center" class="border-bottom-0 color-th">Foto
                                    </th>
                                    <th align="center" class="border-bottom-0 color-th">Compañero
                                    </th>
                                    <th align="center" class="border-bottom-0 color-th">
                                        Dirección</th>
                                    <th align="center" class="border-bottom-0 color-th">Jefatura
                                    </th>
                                    <th align="center" class="border-bottom-0 color-th">Cargo</th>
                                    <th align="center" class="border-bottom-0 color-th">Correo</th>
                                </tr>
                            </thead>
                            <tbody class="table-tbody">
                                @foreach($usuarios as $data)
                                <tr>
                                    <td class="color-td" data-label="Name">
                                        <div class="d-flex py-1 align-items-center">
                                            <div class="flex-fill">
                                                @if($data->emp_estado_ruta_foto == true)
                                                <div class="font-weight-medium"><img class="tam-ima-emp-ta"
                                                        src="/imagenes_empleados/{{$data->emp_ruta_foto}}"></div>
                                                @else
                                                <img class="tam-ima-emp-ta"
                                                    src="https://ui-avatars.com/api/?name={{$data->emp_nombre}}{{$data->emp_apellido}}&background=0D8ABC&color=fff">
                                                @endif
                                            </div>
                                        </div>
                                    </td>
                                    <td class="color-td" data-label="Name">
                                        <div class="d-flex py-1 align-items-center">
                                            <div class="flex-fill">
                                                <div class="font-weight-medium">{{$data->emp_nombre}}
                                                    {{$data->emp_apellido}}</div>
                                            </div>
                                        </div>
                                    </td>

                                    <td class="color-td" data-label="Title">{{$data->dep_departamento}}
                                    </td>
                                    <td class="color-td" class="text-secondary" data-label="Role">
                                        <div>{{$data->per_perfil}} </div>
                                    </td>
                                    <td class="color-td text-secondary" data-label="Role">
                                        <div> {{$data->ca_cargo}}</div>
                                    </td>
                                    <td class="color-td">
                                        <div> {{$data->correo}}</div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
</div>
@endsection

@section('js')
<script src='https://cdn.jsdelivr.net/npm/@fullcalendar/core@6.1.8/locales-all.global.min.js'></script>
<script>
    window.addEventListener("load", function (event) {
        $("#table-usuario").DataTable();
        $("#table-usuario_filter").addClass('porce_mar');   
    });
</script>
@endsection
@else
<script>
location.href = "/";
</script>


@endif