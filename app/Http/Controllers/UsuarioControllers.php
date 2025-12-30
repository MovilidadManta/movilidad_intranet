<?php

namespace App\Http\Controllers;
use DB;

use Session;

use Storage;

use File;
use Carbon\Carbon;
use Illuminate\Http\Request;

class UsuarioControllers extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        if (Session::get('usuario')) {
            $date = Carbon::now();
            $cl = new HomeController();
            $menus_ = $cl->GET_menus_asign();
            $cumples = $cl->GET_Cumpleaños();
            $eventos = $cl->GET_events();
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

            $usuarios = DB::select('select * from view_usuarios');
            foreach ($usuarios as $value) {
                $nuevaruta = public_path('/imagenes_empleados/' . $value->emp_ruta_foto);
                if (File::exists($nuevaruta)) {
                    $value->emp_estado_ruta_foto = true;
                } else {
                    $value->emp_estado_ruta_foto = false;
                }
            }
            return view('Usuario.usuario',compact('menus_', 'cumples', 'isCumple', 'eventos','usuarios'));
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