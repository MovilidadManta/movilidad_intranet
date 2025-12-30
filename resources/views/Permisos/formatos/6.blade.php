<!DOCTYPE html>
<html lang="en">

<head>
    <title>ACUERDO DE CONFIDENCIALIDAD</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        @font-face {
            font-family: Rounded;
            src: url('../fonts/Rounded_Elegance.ttf');
        }


        body {
            font-family: Rounded;
        }

        .titulo1 {
            font-size: 16px;
            font-sight: bold;
            color: #031b4e;
        }

        .titulo2 {
            font-size: 14px;
            font-weight: bold;
            color: #031b4e;
        }

        .titulo3 {
            font-size: 12px;
            font-weight: bold;
        }

        .titulo1-tam {
            font-size: 16px;

        }

        .titulo2-tam {
            font-size: 14px;

        }

        .titulo3-tam {
            font-size: 12px;
            color: #031b4e;
        }

        .color-thead {
            background: #009ee2;
            color: #fff;
        }

        .img-logo {
            width: 120px !important;
            height: 70px !important;
            margin-top: 0px !important;
        }

        .img-logo-transito {
            width: 80px !important;
            height: 70px !important;
            margin-top: 0px !important;
        }

        .justificar {
            text-align: justify !important;
        }

        .header_pdf {
            border: 1px solid #000;
            height: 100px;
            margin: 0 50px;
        }

        .col-3 {
            width: 150px;
            height: 100px;
        }

        .col-7 {
            width: 550px;
        }

        .border {
            border: 1px solid #000;
        }

        .flex {
            display: flex;
        }

        .fd-row {
            flex-direction: row;
        }

        .fd-colm {
            flex-direction: column;
        }

        .jc-star {
            justify-content: flex-start;
        }

        .h50 {
            height: 50px;
        }

        .w50 {
            width: 150px;
        }

        .center {
            text-align: center;
        }

        .f_titulo {
            font-size: 0.7em;
        }

        .f_titulo08 {
            font-size: 0.8em;
        }

        .f_titulo06 {
            font-size: 0.6em;
        }

        .f_titulo05 {
            font-size: 0.5em;
        }


        .negrita {
            font-weight: bold;
        }

        .gris {
            background: #ddd;
        }

        .bord {
            border: 1px solid #000;
        }

        table {
            border-collapse: collapse;
        }
    </style>
</head>

<body>
    <div style="margin: 0, 50px;">
        <table border="1" class="col-7" style="width:100%; height: 120px;">
            <tr>
                <td rowspan="3">
                    <img src='data:image/png;base64, {{$img}}' style='display:block; width:150px;height:53px;' alt="logo">
                </td>
            </tr>
            <tr style="height: 120px;">
                <td class="center f_titulo negrita">
                    <span class="">
                        SISTEMA DE GESTIÓN DE
                        SEGURIDAD Y SALUD
                        OCUPACIONAL
                    </span>
                </td>
                <td class="center f_titulo negrita">
                    <span>
                        REV. SSO-EPMM-P001-2022
                    </span>
                </td>
            </tr>
            <tr>
                <td class="center f_titulo negrita">
                    <span>Procedimiento para justificación
                        por licencias y vacaciones.</span>
                </td>
                <td class="center f_titulo negrita">
                    <span>
                        Fecha actualización:
                    </span>
                    <span>
                        15/06/2022
                    </span>
                </td>
            </tr>

        </table>
    </div>

    <div style="margin-top: 30px;">
        <table border="1" class="" style=" width:100%; height: auto;">
            <tr class="">
                <td class=" center negrita" colspan="4" style="height: 130px;">
                    <span style="margin-bottom: 20px;">EMPRESA PÚBLICA MUNICIPAL MOVILIDAD DE MANTA-EP </span>
                    <br>
                    <br>
                    <span class="f_titulo08">
                        DIRECCIÓN ADMINISTRATIVA DE TALENTO HUMANO
                    </span>
                    <br>
                    <br>
                    <span class="f_titulo08">SOLICITUD DE LICENCIA POR MATERNIDAD</span>
                    <br>
                    <br>
                </td>
            </tr>
            <tr>
                <td class=" center f_titulo negrita" style="height: 25px;" colspan="4">
                    <span>IDENTIFICACIÓN DEL SERVIDOR</span>
                </td>
            </tr>
            <tr class="gris">
                <td colspan="2" style="height: 25px;" class="center"><span class="f_titulo">NOMBRES Y APELLIDOS</span></td>
                <td colspan="2" style="height: 25px;" class="center"><span class="f_titulo">FECHA DE SOLICITUD</span></td>
            </tr>
            @foreach($datos as $p)
            @foreach($p['empleado'] as $e)
            <tr>
                <td colspan="2" style="height: 30px;"><span class="f_titulo">{{$e->emp_nombre}} {{$e->emp_apellido}}</span></td>
                <td colspan="2"><span class="f_titulo">{{$p['fecha_solicitud']}}</span></td>
            </tr>
            @endforeach
            @endforeach
            @foreach($datos as $p)
            @foreach($p['empleado'] as $e)
            <tr>
                <td class="gris"><span class="f_titulo">PRESTA SUS SERVICIOS EN:</span></td>
                <td colspan="3" class="f_titulo">{{$e->per_perfil}}</td>
            </tr>
            <tr>
                <td class="gris"><span class="f_titulo">FECHA DE INGRESO A LA ENTIDAD: </span></td>
                <td colspan="3" class="f_titulo">{{$e->emp_fecha_ingreso}}</td>
            </tr>
            <tr class="gris ">
                <td colspan="1" class="negrita center"><span class="f_titulo">DIAS OTORGADOS: </span></td>
                <td class="negrita center"> <span class="f_titulo">DESDE EL:</span></td>
                <td colspan="2" class="negrita center"><span class="f_titulo">HASTA EL:
                    </span> </td>
            </tr>
            <tr class="center">
                @if($p['total_dias']>1)
                <td colspan="1" style="height: 30px;"><span class="f_titulo"> {{$p['total_dias']}} dias</span></td>
                @else
                <td colspan="1" style="height: 30px;"><span class="f_titulo"> {{$p['total_dias']}} dia</span></td>
                @endif
                <td> <span class="f_titulo">{{$p['desde']}}</span></td>
                <td colspan="2"><span class="f_titulo">{{$p['hasta']}}</span> </td>
            </tr>
            <tr>
                <td colspan="4" style="height: 60px;">
                    <span class="f_titulo06 negrita">
                        DETALLAR DOCUMENTO QUE JUSTIFICA LA SOLICITUD: CERTIFICADO NEDUCI DE NATERBUDAD (NACIDO VIVO)
                    </span>
                    <br>
                    <br>
                    <span class="f_titulo">{{$p['observacion']}}</span>
                    <br>
                    <br>
                    <span class="f_titulo06 negrita">ACORDE A PROTOCOLO DE RETORNO AL TRABAJO</span>
                    <br>
                </td>
            </tr>
            <tr>
                <td colspan="1" class="center" style="height: 120px;">
                    @if(isset($p['codigo']))
                    {!!QrCode::generate("Permiso firmado por: ". $e->emp_nombre." ". $e->emp_apellido);!!}
                    @endif
                    <br>
                    <span class="f_titulo negrita">FIRMA DEL SERVIDOR SOLICITANTE</span>
                </td>
                <td colspan="3" class="center" style="height: 120px;">
                    <br>
                    <br>
                    <br>
                    <span class="f_titulo negrita">FIRMA DEL JEFE INMEDIATO</span>

                </td>
            </tr>
            @endforeach
            @endforeach
            <tr class="gris">
                <td colspan="4" class="negrita center" style="height: 35px; top:0px">
                    <span class="f_titulo">ESPACIO PARA USO EXCLUSIVO DE LAS DATH
                    </span>
                </td>
            </tr>
            <tr>
                <td colspan="1" style="height: 100px;">
                    <br>
                    <span class="f_titulo08">Sello de Recepción en las DATH </span>
                    <br>
                    <br>
                </td>
                <td colspan="3" style="height: 100px;">
                    <br>
                    <br>
                    <br>
                    <br>
                </td>
            </tr>
            <tr class="gris">
                <td colspan="4" class="center" style="height: 100px;">
                    <span class="negrita">
                        Nota:
                    </span>
                    <span class="f_titulo08">La Licencia o permiso por enfermedad se concederá siempre y cuando el servidor la justifique dentro del término de tres
                        días de haberse producido, mediante la certificación respectiva. </span>
                </td>
            </tr>
        </table>
    </div>


    <script>
        var h = $("#txt-hora").val().split('.')
        var hora = h[0]
        $("#hora").val(hora)
    </script>
</body>

</html>