<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\HomeController;

use DB;

use  Session;

use Carbon\Carbon;



class CumpleaniosController extends Controller
{

    public function index()
    {
        $cl = new HomeController();
        $menus_ = $cl->GET_menus_asign();


        //return $menus_;
        return view('Cumpleaños.index', compact('menus_'));
    }

    public function create()
    {
        $anio = date("Y");
        $hora = '08:30:00';
        $sexo = "";
        $color = "";
        $cumpleanio = DB::select("select emp_cedula as cedula,emp_nombre as title,concat(emp_nombre,' ' ,emp_apellido)as empleado, emp_sexo as Sexo,emp_fecha_nacimiento AS start, emp_edad as edad from tbl_empleados where emp_estado='A'");
        foreach ($cumpleanio as $c) {
            $e = explode("-", $c->start);
            $dato = $anio . '-' . $e[1] . '-' . $e[2] . 'T' . $hora;
            //#ff4081  // 2 hombre  // 1mujer 
            if ($c->sexo == 'M') {
                $sexo = "Masculino";
                $color = '#1565c0';
            } else if ($c->sexo == 'F') {
                $sexo = "Femenino";
                $color = '#ff4081';
            }
            $array[] = array(
                "title" => $c->title,
                "start" => $dato,
                "edad" => $c->edad,
                "anio" => $e[0],
                "Sexo" => $sexo,
                "color" => $color,
                "cedula" => $c->cedula,
                "empleado" => $c->empleado
            );
        }
        return response()->json($array);
    }

    public function store(Request $r)
    {
        $date = Carbon::now();
        $date = $date->format('Y-m-d');
        $ip = request()->ip();
        $user = session::get('id_users');

        $json[] = [
            'user_to' => $r->user_to,
            'user_send' => session::get('cedula'),
            'contenido' => $r->mensaje,
            'estado' => 0
        ];
        $jsoninsert = json_encode($json);
        $sql = DB::select('select public.procedimiento_registrar_datos_mensajes(?,?,?)', [$jsoninsert, $ip, $user]);
        foreach ($sql as $s) {
            $id = $s->procedimiento_registrar_datos_mensajes;
        }
        if ($sql != "[]") {
            return response()->json(['respuesta' => "true", "data" => $id, "sql" => $sql]);
        } else {
            return response()->json(["respuesta" => "false"]);
        }
    }

    public function GET_mensajes()
    {
        $user = session::get('cedula');
        $mis_mensajes = DB::select("SELECT m.no_id,m.user_to,m.user_send,concat(e.emp_nombre,' ',e.emp_apellido) as usuario, m.contenido,m.asunto,m.hora_envio,m.hora_lectura,m.estado, m.tipo_notificaciones FROM tbl_mensajes m 
        inner join tbl_empleados e ON e.emp_cedula = m.user_send
        where user_to = ? and estado=0 ", [$user]);
        return $mis_mensajes;
    }

    public function GET_contenido($id)
    {
        $mis_mensajes = DB::select("select * from tbl_mensajes where no_id=?", [$id]);
        if ($mis_mensajes == []) {
            return response()->json(["respuesta" => false]);
        } else {
            return response()->json(['respuesta' => true, "data" => $mis_mensajes]);
        }
    }

    public function GETdesactivarNot($id)
    {

        $dele = DB::update('update tbl_mensajes set estado=1 where no_id=?', [$id]);

        if ($dele > 0) {
            return response()->json(["res" => true, "sms" => "mensaje leido"]);
        } else {
            return response()->json(["res" => false, "sms" => "9998"]);
        }
    }
}
