<!DOCTYPE html>
<html lang="en">
<head>
    <title>{{$empleado->emp_cedula}}</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .logo_movilidad_manta{
            width: 140px;
        }
        .logo_alcaldia_manta{
            width: 210px;
            float: right;
        }
        .escudo_manta{
            position: absolute;
            top: 980px;
            right: 17px;
        }
        .footer{
            position: absolute;
            bottom: 30px;
            left: 60px;
            color: #ccc;
        }
        .row_footer{
            padding: 8px 20px 8px 0px;
            width: 25%;
            font-size: 8px;
            color: #ccc;
            font-weight: bold;
        }
        .row_footer_phone{
            width: 13%;
        }
        .row_footer_web{
            width: 22%;
        }
        .row_footer_email{
            width: 30%;
        }
        .row_footer_location{
            width: 25%;
        }
        .logo_escudo_manta{
            width: 55px; 
        }
        .titulo_principal{
            text-align: center;
            font-size: 16px;
            margin-top: 30px;
            margin-bottom: 20px;
        }

        .content{
            margin-left: 10px;
            width: 100%;
        }

        .tabla_datos_fecha{
            width: 100%;
            border-collapse: collapse;
            border-spacing: 5px 7px;
            margin-top: 20px;
        }
        .cell_fecha_titulo{
            text-align: center;
        }
        .cell_fecha_emision{
            text-align: center;
            width: 33.3%;
            font-weight: bold;
            font-size: 12px;
            padding: 12px;
            border-bottom: 1px solid #000;
        }
        .cell_fecha_emision_info{
            text-align: center;
            width: 33.3%;
            font-weight: bold;
            font-size: 12px;
            padding: 5px;
            border-bottom: 1px solid #000;
        }
        .div_table_fecha{
            width: 30%;
            float: right;
        }

        .tabla_datos_empleado{
            width: 100%;
            border-collapse: collapse;
            border-spacing: 5px 7px;
            margin-top: 20px;
        }
        .cell_datos_empleados_topic{
            text-align: left;
            width: 30%;
            font-weight: bold;
            font-size: 12px;
            padding: 12px;
        }
        .cell_datos_empleados_description{
            text-align: left;
            width: 70%;
            font-size: 12px;
            padding: 12px;
        }
        .tabla_preguntas{
            width: 100%;
            border-collapse: collapse;
            border-spacing: 5px 7px;
            margin-top: 20px;
        }
        .cell_pregunta_row{
            text-align: left;
            width: 100%;
            font-weight: bold;
            font-size: 12px;
            padding: 12px;
        }
        .cell_respuesta_row{
            text-align: left;
            width: 100%;
            font-size: 12px;
            padding: 12px;
        }
        .cell_response_check{
            text-decoration: underline;
        }
        .ok_question{
            color: #28a745;
        }
        .error_question{
            color: #d9534f;
        }
        .error{
            width: 12px;
        }
        .ok{
            width: 12px; 
        }
    </style>
</head>

<body>
    <main>
        <header class="header">
            <img src="img/lotaip/movilidad_manta.png" class="logo_movilidad_manta" alt="Movilidad Manta" />
            <img src="img/lotaip/manta_alcaldia.png" class="logo_alcaldia_manta" alt="Alcaldia Manta" />
        </header>
        <div class="div_table_fecha">
            <table class="tabla_datos_fecha" border="1">
                <tr>
                    <td colspan="3" class="cell_fecha_titulo">FECHA DE EMISIÓN</td>
                </tr>
                <tr>
                    <td class="cell_fecha_emision">{{$dia_emision}}</td>
                    <td class="cell_fecha_emision">{{$mes_emision}}</td>
                    <td class="cell_fecha_emision">{{$anio_emision}}</td>
                </tr>
                <tr>
                    <td class="cell_fecha_emision_info">DÍA</td>
                    <td class="cell_fecha_emision_info">MES</td>
                    <td class="cell_fecha_emision_info">AÑO</td>
                </tr>
            </table>
        </div>
        <div class="content">
            <h1 class="titulo_principal">{{$ficha[0]->proyecto}}</h1>
            <table class="tabla_datos_empleado">
                <tr>
                    <td class="cell_datos_empleados_topic">CÉDULA:</td>
                    <td class="cell_datos_empleados_description">{{$empleado->emp_cedula}}</td>
                </tr>
                <tr>
                    <td class="cell_datos_empleados_topic">APELLIDOS Y NOMBRES:</td>
                    <td class="cell_datos_empleados_description">{{$empleado->emp_apellido}} {{$empleado->emp_nombre}}</td>
                </tr>
                <tr>
                    <td class="cell_datos_empleados_topic">CARGO</td>
                    <td class="cell_datos_empleados_description">{{$empleado->emp_cargo}}</td>
                </tr>
            </table>
            <h1 class="titulo_principal">Su calificación es {{$ficha[0]->total_calificacion}}/{{$nota_final}}</h1>
            <table class="tabla_preguntas">
                <?php
                $cont_pregunta = 0;
                $list_preguntas = [];
                ?>
                @foreach($ficha as $f)
                 <?php  
                    if(in_array($f->id_pregunta, $list_preguntas)){
                        continue;
                    }
                    $list_preguntas[] = $f->id_pregunta;
                    $cont_pregunta++;
                 ?>
                    <tr>
                        <td class="cell_pregunta_row">{{$cont_pregunta}} {{$f->pregunta}}</td>
                    </tr>
                    <?php
                    $preguntas = array_filter($ficha, function ($row) use($f) {
                                        return $row->id_pregunta == $f->id_pregunta;
                                    });
                    ?>
                     @foreach($preguntas as $p)
                        <tr>
                            <td class="cell_respuesta_row {{$p->opcion_id == $f->id_opcion ? 'cell_response_check' : ''}} {{$p->opcion_id == $f->id_opcion && $p->tipo_respuesta_opcion == 'C'  ? 'ok_question' : ''}} {{$p->opcion_id == $f->id_opcion && $p->tipo_respuesta_opcion == 'I'  ? 'error_question' : ''}}">
                                {{$p->value}} ({{$p->tipo_respuesta_opcion == 'C' ? $f->value_question : '0'}} puntos)
                                @if($p->tipo_respuesta_opcion == 'C')
                                    <img class="error" src="img/lotaip/ok.png" alt="ok">
                                @endif
                                @if($p->tipo_respuesta_opcion == 'I')
                                    <img class="error" src="img/lotaip/error.png" alt="error">
                                @endif
                            </td>
                        </tr>
                     @endforeach
                @endforeach
            </table>
        </div>
    </main>
    <div class="escudo_manta">
        <img src="img/lotaip/escudo_manta.png" class="logo_escudo_manta" alt="Escudo Manta">
    </div>
    <div class="footer">
        <table class="tabla_footer">
            <tr>
                <td class="row_footer row_footer_phone">
                    <img src="img/lotaip/phone.png" alt="phone"> 05303-7681
                </td>
                <td class="row_footer row_footer_web">
                    <img src="img/lotaip/web.png" alt="web"> http://movilidadmanta.gob.ec
                </td>
                <td class="row_footer row_footer_email">
                    <img src="img/lotaip/email.png" alt="email"> requerimiento.informacion@movilidadmanta.gob.ec
                </td>
                <td class="row_footer row_footer_location">
                    <img src="img/lotaip/ubicacion.png" alt="ubicacion"> Vía Puerto-Aeropuerto Sector El Palmar
                </td>
            </tr>
        </table>
    </div>
</body>
</html>