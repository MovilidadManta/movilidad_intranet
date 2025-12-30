<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Validation\Rules\Unique;
use File;

class EvaluacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cl = new HomeController();
        $menus_ = $cl->GET_menus_asign();
        $cumples = $cl->GET_Cumpleaños();
        $eventos = $cl->GET_events();

        $id_nivel = session::get('id_nivel');
        $id_direccion = session::get('id_departamento');
        $id_jefatura = session::get('id_jefatura');
        $id_cargo = session::get('id_cargo');
        $id_nivel_calificar = 0;
        $select_direccion = '';
        $select_jefatura = '';
        $empleados_direccion = [];
        
        $empleados_ev = DB::select("SELECT * FROM view_organigrama o
        INNER JOIN tbl_empleados e ON e.emp_cedula = o.pic
        left JOIN tbl_evaluaciones ee ON ee.ev_id_empleado_evaluado = e.emp_id
        where cargo_jefe = (SELECT id_cargo FROM view_organigrama where pic = ?)",[session::get('cedula')]);
        //return $empleados_ev;

        return view('Empleado_Evaluacion.index', compact('menus_', 'cumples', 'eventos','empleados_ev'));
    }

    public function get_empleados_id($id_empleado)
    {
        $sql = DB::connection('pgsql')->Select('select public.cursor_listar_empleados_id(?)', [$id_empleado]);

        foreach ($sql as $r) {
            $data = $r->cursor_listar_empleados_id;
        }
        $json_data = json_decode($data);

        return $json_data;

        if ($json_data != "[]") {
            return response()->json(['data' => $json_data, 'respuesta' => true]);
        } else {
            return response()->json(['respuesta' => false]);
        }
    }


    public function pregunta_evaluacion_id($id_empleado)
    {
        $cl = new HomeController();
        $menus_ = $cl->GET_menus_asign();
        $cumples = $cl->GET_Cumpleaños();
        $eventos = $cl->GET_events();
        return view("Empleado_Evaluacion.formulario", compact('menus_', 'cumples', 'eventos',"id_empleado"));
    }


    public function get_preguntas_evaluacion($id_empleado)
    {

        $sql_evaluado = DB::connection('pgsql')->Select('select public.cursor_listar_empleados_id(?)', [$id_empleado]);

        foreach ($sql_evaluado as $r) {
            $data_empleado_evaluado = $r->cursor_listar_empleados_id;
        }
        $json_data_empleado_evaluado = json_decode($data_empleado_evaluado);

        $id_empleado_evaluador = session::get('id_empleado');
        $json_data_empleado_evaluador = DB::connection('pgsql')->Select("SELECT * FROM  public.tbl_empleados e, public.tbl_cargos c, public.tbl_estructuras_organicas eo ,public.tbl_jefaturas_subdirecciones p, public.tbl_direcciones d 
                where e.emp_id = $id_empleado_evaluador
                and e.emp_id_cargo = c.ca_id 
                and c.ca_id = eo.eo_id_cargo
                and e.emp_id_perfil = p.per_id
                and e.emp_id_departamento = d.dep_id
                ");
        

        $sql_pregunta = DB::connection('pgsql')->Select('select public.cursor_listar_preguntas()');

        foreach ($sql_pregunta as $r) {
            $data_pregunta = $r->cursor_listar_preguntas;
        }
        $json_data_pregunta = json_decode($data_pregunta, true);

        $array_m = [];
        for ($i = 0; $i < count($json_data_pregunta); $i++) {
            array_push($array_m, $json_data_pregunta[$i]['pre_id_categoria']);
        }
        
        $array_meses = array_keys(array_count_values($array_m));
        
        $array_preguntas = [];
        $array_preguntas_cate = [];
        for ($i=0; $i < count($array_meses); $i++) { 
            $array_preguntas = [];
            for ($j=0; $j < count($json_data_pregunta); $j++) {
                if($array_meses[$i] == $json_data_pregunta[$j]['pre_id_categoria']){
                    array_push($array_preguntas,$json_data_pregunta[$j]);
                }
            }
            array_push($array_preguntas_cate,array('categoria'=>$array_meses[$i],'preguntas_categoria'=>$array_preguntas));
        }

        if ($json_data_empleado_evaluado != "[]") {
            return response()->json([
                'data_empleado_evaluado' => $json_data_empleado_evaluado,
                'data_empleado_evaluador' => $json_data_empleado_evaluador, 
                'data_preguntas'=>$array_preguntas_cate,
                'id_empleado_evaluador'=>$id_empleado_evaluador,
                'total_preguntas'=>count($json_data_pregunta),
                'respuesta' => true]);
        } else {
            return response()->json(['respuesta' => false]);
        }
    }

    public function save_evaluacion(Request $request)
    {
        $ip = request()->ip();
        $user = session::get('id_users');
        
        $id_empleado_evaluador = $request->id_evaluador;
        $id_empleado_evaluado = $request->id_evaluado;
        $json_preguntas = $request->json_preguntas;
       
        $sql = DB::Select('select public.procedimiento_registrar_evaluacion(?,?,?,?,?)', [$json_preguntas, $ip, $user,$id_empleado_evaluador,$id_empleado_evaluado]);
        foreach ($sql as $s) {
            $id = $s->procedimiento_registrar_evaluacion;
        }
        if ($sql != "[]") {
            return response()->json(['respuesta' => "true", "data" => $id, "sql" => $sql]);
        } else {
            return response()->json(["respuesta" => "false"]);
        }
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
