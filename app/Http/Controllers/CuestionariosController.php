<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use Session;
use Storage;
use Redirect;
use DateTime;
use Carbon\Carbon;
use Mpdf\Mpdf;

class CuestionariosController extends Controller
{
    public function viewformulario(){
        $cl = new HomeController();
        $menus_ = $cl->GET_menus_asign();
        $cargo_id = Session::get('emp_id_cargo');
        $user = Session::get('id_users');

        $formularios = DB::select("SELECT p.id, p.proyecto, p.estado, p.created_at, p.cargo_formulario, p.minutes_test, f.id_usuario, f.estado as estado_prueba,
                                f.total_calificacion, p.value_question, p.number_questions
                                FROM test.pre_proyectos AS p 
                                LEFT JOIN test.pre_fichas AS f ON p.id = f.id_proyecto 
                                AND f.id_usuario = $user
                                WHERE p.estado = 1
                                AND p.cargo_formulario = '{$cargo_id}'");
                                
        return view('Formularios.index',compact('menus_', 'formularios'));
    }

    public function formulario($id){
        if (Session::get('nombres')) {
            $user = Session::get('id_users');
            $cl = new HomeController();
            $menus_ = $cl->GET_menus_asign();
            $proyecto =  DB::table('test.pre_proyectos')->where("id",$id)->get();
            $ficha =  DB::table('test.pre_fichas')->where("id_proyecto",$id)->where("id_usuario",$user)->get();
            //$preguntas = DB::table('pre_preguntas')->where("estado", "=", "1")->get();
            $sqlQuery = "";
            if(count($ficha) == 0){
                $preguntas = DB::select("SELECT p.*, tp.id as id_tipo, tp.icono ,tp.tipo as tipo_i, 0 as id_opcion FROM test.pre_preguntas as p
                inner join test.pre_tipos_opciones as tp ON tp.id =p.id_tipo where p.id_proyecto=$id and p.estado=1 ORDER BY RANDOM() LIMIT {$proyecto[0]->number_questions}");
            } else{
                $preguntas = DB::select("SELECT p.*, tp.id as id_tipo, tp.icono ,tp.tipo as tipo_i, fp.id_opcion
                                            FROM test.pre_fichas_preguntas AS fp
                                            INNER JOIN test.pre_preguntas AS p ON fp.id_pregunta = p.id
                                            INNER JOIN test.pre_tipos_opciones AS tp ON tp.id =p.id_tipo 
                                            WHERE fp.id_ficha = {$ficha[0]->id} and p.estado=1 order by fp.id");

                if(count($preguntas) == 0){
                    $preguntas = DB::select("SELECT p.*, tp.id as id_tipo, tp.icono ,tp.tipo as tipo_i, 0 as id_opcion FROM test.pre_preguntas as p
                    inner join test.pre_tipos_opciones as tp ON tp.id =p.id_tipo where p.id_proyecto=$id and p.estado=1 ORDER BY RANDOM() LIMIT {$proyecto[0]->number_questions}");
                }
            }
            
            $tipo  = DB::table('test.pre_tipos_opciones')->where("estado", "=", "1")->get();
            $opciones = DB::table('test.pre_opciones')->where("estado", "=", "1")->get();
            //return $opciones;           
            return view('Formularios.formulario', compact('menus_', 'proyecto','preguntas', 'tipo', 'opciones', 'id', 'ficha'));
        } else {
            return Redirect::to('/');
          
        }
    }

    public function get_formulario_user($id){
        $user = Session::get('id_users');
        $ficha =  DB::table('test.pre_fichas_with_minutes')->where("id_proyecto",$id)->where("id_usuario",$user)->get();
        if(count($ficha) > 0){
            $ficha = $ficha[0];
            return [
                "total" => $ficha->total_calificacion,
                "nota" => $ficha->number_questions * $ficha->value_question,
                "id" => $ficha->id,
                "minutes_end" => $ficha->minutes_to_end,
                "estado" => $ficha->estado
            ];
        }
        return [];
    }

    public function get_pregunta($id){
        $preguntas = DB::select('select ppo.id_opcion,pp.id as id_pregunta, pp.pregunta, pp.id_tipo as id_tipo, pp.id_proyecto, pp.estado_preguntas, pp.estado from test.pre_preguntas_opciones  ppo 
        inner JOIN test.pre_preguntas pp ON ppo.id_pregunta = pp.id where ppo.id_opcion='.$id);

        if($preguntas != []){
            foreach($preguntas as $p){
                $opciones = DB::table('test.pre_opciones')->where("id_pregunta", "=", $p->id_pregunta)->get();
                $preguntas_[] = array(
                    "id_opcion" => $p->id_opcion,
                    "id_pregunta" =>$p->id_pregunta,
                    "pregunta" =>$p->pregunta,
                    "id_tipo" =>$p->id_tipo,
                    "id_proyecto" =>$p->id_proyecto,
                    "estado_preguntas"=>$p->estado_preguntas,
                    "estado" =>$p->estado,
                    "opciones" => $opciones,
                );
            }
            return response()->json($preguntas_);
        }else{
            return response()->json(0);

        }
    }

    public function store_pre_ficha(Request $r){
        $date = Carbon::now();
        $id_empleado = Session::get('id_empleado');
        $user = Session::get('id_users');

        $tb_ficha = DB::table('test.pre_fichas')->insertGetId([
            'id_usuario' => $user,
            'id_proyecto' => $r->id_proyecto,
            'created_at' => $date,
            'id_persona' => $id_empleado,
        ]);

        if ($tb_ficha > 0) {
            return response()->json([
                "respuesta" => true,
                "id_ficha" => $tb_ficha
            ]);
        }

        return response()->json(["respuesta" => false, "tipo" => "Ocurrió un error en el sistema"]);
    }

    public function store_ficha(Request $r)
    {
        $date = Carbon::now();
        $id_empleado = Session::get('id_empleado');
        $user = Session::get('id_users');
        $cc = 0; // Contador de preguntas procesadas
        $totalCalificaciones = 0;

        // Validar si los arrays existen y tienen contenido
        if (!isset($r->id_ficha, $r->array_text_resul, $r->array_result)) {
            return response()->json(["respuesta" => false, "tipo" => "Datos incompletos"]);
        }

        if ($r->id_ficha > 0) {

            $conf_project = DB::select('SELECT value_question, number_questions FROM test.pre_fichas AS f 
                                    INNER JOIN test.pre_proyectos AS p ON f.id_proyecto = p.id WHERE f.id = '. $r->id_ficha);
            
            $conf_project = $conf_project[0];

            DB::table('test.pre_fichas_preguntas')->where([
                'id_ficha' => $r->id_ficha
            ])->delete();

            // Procesar respuestas tipo texto
            foreach (json_decode($r->array_text_resul) as $text) {
                DB::table('test.pre_fichas_preguntas')->insert([
                    'id_pregunta' => $text->id_pregunta,
                    'id_ficha' => $r->id_ficha,
                    'id_opcion' => null,
                    'respuesta' => $text->respuesta,
                    'observacion' => null,
                ]);
                $cc++;
            }

            // Procesar respuestas tipo opción
            foreach (json_decode($r->array_result) as $res) {
                DB::table('test.pre_fichas_preguntas')->insert([
                    'id_pregunta' => $res->id_pregunta,
                    'id_ficha' => $r->id_ficha,
                    'id_opcion' => $res->id_opcion,
                    'respuesta' => '',
                    'observacion' => '',
                ]);
                $cc++;
            }

            // Calcular calificación
            $preguntas = DB::select('
                SELECT o.tipo_respuesta_opcion
                FROM test.pre_fichas AS f
                INNER JOIN test.pre_fichas_preguntas AS p ON f.id = p.id_ficha
                INNER JOIN test.pre_opciones AS o ON p.id_opcion = o.id
                WHERE f.id = ?
            ', [$r->id_ficha]);

            $calificacion = collect($preguntas)->reduce(function ($carry, $pregunta) use($conf_project) {
                return $carry + ($pregunta->tipo_respuesta_opcion == 'C' ? $conf_project->value_question : 0);
            }, 0);

            $totalCalificaciones += $calificacion;

            // Actualizar ficha con la calificación total
            DB::table('test.pre_fichas')
            ->where('id', $r->id_ficha)
            ->update(['total_calificacion' => $calificacion,
            'estado' => $r->is_save]);
        }

        // Validar resultado final
        if ($cc == 0) {
            return response()->json(["respuesta" => false, "tipo" => "Ocurrió un error en el sistema"]);
        }

        return response()->json([
            "respuesta" => true,
            "id_ficha" => $r->id_ficha,
            "tipo" => "ok",
            "calificacion" => $totalCalificaciones,
            "nota_examen" => $conf_project->number_questions * $conf_project->value_question, // Multiplica las preguntas procesadas por 2
        ]);
    }

    public function get_pdf_calificacion($ficha_id){
        $ficha = DB::select("
        SELECT p.proyecto, f.created_at, f.id, f.id_usuario, f.id_proyecto, f.id_persona, f.total_calificacion,
        pr.id_pregunta, pr.id_opcion, pre.pregunta, o.id as opcion_id, o.value, o.tipo_respuesta_opcion, p.number_questions,
        p.value_question
        FROM test.pre_proyectos as p
        INNER JOIN test.pre_fichas as f ON p.id = f.id_proyecto
        INNER JOIN test.pre_fichas_preguntas AS pr ON f.id = pr.id_ficha
        INNER JOIN test.pre_preguntas AS pre ON pre.id = pr.id_pregunta
        INNER JOIN test.pre_opciones AS o ON pre.id = o.id_pregunta  
        WHERE f.id = {$ficha_id};
        ");

        $fecha = DateTime::createFromFormat('Y-m-d H:i:s', $ficha[0]->created_at);

        $empleado =  DB::table('view_empleados')->where("emp_id",$ficha[0]->id_persona)->get();
        $empleado = $empleado[0];

        // Contar la cantidad de valores únicos
        $nota_final = $ficha[0]->number_questions * $ficha[0]->value_question;

        $html = view('Formularios.reporte_calificacion', 
            [
                'dia_emision'=>$fecha->format("d"),
                'mes_emision'=>$fecha->format("m"),
                'anio_emision'=>$fecha->format("Y"),
                'empleado'=>$empleado,
                'ficha'=>$ficha,
                'nota_final' => $nota_final
            ])->render();

        $namefile = "{$empleado->emp_cedula}.pdf";
        $defaultConfig = (new \Mpdf\Config\ConfigVariables())->getDefaults();
        $fontDirs = $defaultConfig['fontDir'];
        $defaultFontConfig = (new \Mpdf\Config\FontVariables())->getDefaults();
        $fontData = $defaultFontConfig['fontdata'];
        $mpdf = new Mpdf([
            'fontDir' => array_merge($fontDirs, [
                public_path() . '/fonts',
            ]),
            'fontdata' => $fontData + [
                'arial' => [
                    'R' => 'arial.ttf',
                    'B' => 'arialbd.ttf',
                ],
            ],
            'default_font' => 'arial',
            'orientation' => 'P'
        ]);
        $mpdf->SetDisplayMode('fullwidth');
        $mpdf->WriteHTML($html);
        $mpdf->debug = true;
        $mpdf->showImageErrors = true;
        $mpdf->Output($namefile, "I");
    }

}