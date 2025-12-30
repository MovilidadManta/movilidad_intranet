<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\HomeController;

use DB;

use  Session;


class EventosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function get_eventos()
    {
        $anio = date("Y");
        $hora = '08:30:00';
        $sexo = "";
        $color = "";
        $eventos = DB::select("select * from tbl_intra_eventos where ev_tipo='2' and ev_estado=1");
        foreach ($eventos as $c) {
            //  $e = explode("-", $c->start);
            //    $dato = $anio . '-' . $e[1] . '-' . $e[2] . 'T' . $hora;
            if ($c->ev_fechai == $c->ev_fechaf) {
                $array[] = array(
                    "title" => $c->ev_titulo,
                    "start" => $c->ev_fechai . 'T' . $c->ev_hora,
                    "color" => '#1565c0',
                    "descripcion" => $c->ev_contenido
                );
            } else {
                $array[] = array(
                    "title" => $c->ev_titulo,
                    "start" => $c->ev_fechai,
                    "end"   => $c->ev_fechaf,
                    "color" => '#1565c0',
                    "descripcion" => $c->ev_contenido
                );
            }
        }
        return response()->json($array);
    }

    public function index()
    {
        if (Session::get('usuario')) {
            $cl = new HomeController();
            $menus_ = $cl->GET_menus_asign();
            $cumples = $cl->GET_Cumpleaños();
            $eventos = $cl->GET_events();
            //return $eventos;
            $fecha = DB::select('select emp_fecha_nacimiento AS fecha from tbl_empleados where emp_id = ?', [Session::get('id_empleado')]);
            $anio = date("Y");
            $fecha = $fecha[0]->fecha;
            $e = explode("-", $fecha);
            $dato = $anio . '-' . $e[1] . '-' . $e[2];
            $dia = date('Y-m-d');
            if ($dato == $dia) {
                $isCumple = true;
            } else {
                $isCumple = false;
            }
            return view('Eventos.index', compact('menus_', 'cumples', 'isCumple', 'eventos'));
        } else {
            return view("Login.login");
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
