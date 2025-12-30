<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Session;

use DB;
use PhpParser\Node\Stmt\Foreach_;
use Redirect;

use Storage;

use File;

use Carbon\Carbon;



class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function GET_PERMISOS()
    {
        $identificacion = Session::get('cedula');
        $permisosporAprobar = DB::select("select p.id_empleado,p.id,p.id_tipo_permiso, concat(e.emp_nombre,' ',e.emp_apellido)as empleado, tp.tipo_permiso, p.fecha_inicio, p.fecha_final,p.hora_inicio, p.hora_final, p.total_horas, p.documento, p.fecha_solicitud, p.total_dias,p.observacion,p.formulario
        from tbl_permisos p
        inner join tbl_empleados e ON CAST(e.emp_cedula AS integer) = p.id_empleado 
        inner join tbl_tipos_permisos tp ON p.id_tipo_permiso = tp.id
        WHERE p.jefe_imediato = ? and p.estado ='INGRESADO' ORDER BY p.id DESC", [$identificacion]);
        return $permisosporAprobar;
    }

    public function GET_PERMISOS_SOLICITUDES($fech_ini, $fech_fin)
    {
        $identificacion = Session::get('cedula');
        if ($fech_ini == 0) {
            $ruta_fecha_inicio = '';
            $ruta_fecha_fin = '';
        } else {
            $ruta_fecha_inicio = "AND p.fecha_inicio >= TO_DATE('$fech_ini', 'YYYY-MM-DD')";
            $ruta_fecha_fin = "AND  p.fecha_final <= TO_DATE('$fech_fin', 'YYYY-MM-DD')";
        }
        $permisosporAprobar = DB::select("select 
        p.id_empleado,
        p.estado, 
        p.id,
        p.id_tipo_permiso, 
        concat(e.emp_nombre,' ',e.emp_apellido)as empleado, 
        tp.tipo_permiso, 
        p.fecha_inicio, 
        p.fecha_final,
        p.hora_inicio, 
        p.hora_final, 
        p.total_horas, 
        p.documento, 
        p.fecha_solicitud,
        p.observacion_rechazo, 
        p.total_dias,
        p.observacion,
        p.formulario
        from tbl_permisos p
        inner join tbl_empleados e ON CAST(e.emp_cedula AS integer) = p.id_empleado 
        inner join tbl_tipos_permisos tp ON p.id_tipo_permiso = tp.id
        WHERE p.jefe_imediato = '$identificacion'
        $ruta_fecha_inicio
        $ruta_fecha_fin
        ORDER BY p.id DESC");
        return $permisosporAprobar;
    }

    public function GET_menus_asign()
    {
        $id_proyecto = Session::get('id_proyecto');
        $id_user = Session::get('id_users');
        $menus = DB::select(
            "select * from tbl_submenus s  
        INNER JOIN tbl_menus m  ON s.sme_id_menu = m.me_id
        INNER JOIN tbl_usuarios_menus um ON um.um_id_submenu = s.sme_id 
        where m.me_id_proyecto =? 
        and um.um_id_usuario = ? ORDER BY sme_id_menu ASC",
            [$id_proyecto, $id_user]
        );
        $menus_ = [];
        foreach ($menus as $m) {
            if (sizeof($menus_) == 0) {
                $menus_[] = [
                    "menu" => $m->me_menu,
                    "icono" => $m->me_icons,
                    "submenu" => null
                ];
            } else {
                $aux = 0;
                foreach ($menus_ as $mm) {
                    if ($m->me_menu == $mm['menu']) {
                        $aux++;
                        $submenu[] = [
                            "sme_id" => $m->sme_id,
                            "sme_submenu" => $m->sme_submenu,
                            "sme_tipo_link" => $m->sme_tipo_link,
                            "sme_link" => $m->sme_link
                        ];
                    }
                }
                if ($aux == 0) {
                    $menus_[] = [
                        "menu" => $m->me_menu,
                        "icono" => $m->me_icons,
                        "submenu" => null
                    ];
                }
            }
            $index = 0;
            foreach ($menus_ as $m) {
                $submenu = [];
                foreach ($menus as $mm) {
                    if ($m['menu'] == $mm->me_menu) {
                        $submenu[] = [
                            "sme_id" => $mm->sme_id,
                            "sme_submenu" => $mm->sme_submenu,
                            "sme_tipo_link" => $mm->sme_tipo_link,
                            "sme_link" => $mm->sme_link
                        ];
                    }
                }
                $menus_[$index]["submenu"] = $submenu;
                $index++;
            }
        }
        //$menus_ = response()->json($menus_);
        return json_encode($menus_);
    }

    public function GET_Cumpleaños()
    {
        $cumpleanio = DB::select("select emp_cedula as cedula,concat(emp_nombre,' ' ,emp_apellido)as title, emp_sexo as Sexo,emp_fecha_nacimiento AS start, emp_edad as edad from tbl_empleados where emp_estado='A'");
        return $cumpleanio;
    }

    public function GET_events()
    {
        $dia = date('Y-m-d');
        $event = DB::select("select * from public.tbl_intra_eventos where ev_estado=1 and ? BETWEEN ev_fechai AND ev_fechaf and ev_tipo = '2'", [$dia]);
        return $event;
    }
    public function index()
    {
        if (Session::get('usuario')) {

            $menus_ = $this->GET_menus_asign();
            $cumples = $this->GET_Cumpleaños();
            $eventos = $this->GET_events();
            $permisos = $this->GET_PERMISOS();
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
            $renderButtonMarcacion = false;

            if(Session::get('cer_id')){
                $renderButtonMarcacion = true;
            }
            /* $files = Storage::disk('ftp')->files('sliders');
            return $files;*/

            $slider = DB::connection('pgsql_pag_web')->select("select * from public.tbl_sliders where sl_tipo='INT' and sl_estado='A'");
            //return $slider;
            return view('Home.home', compact('menus_', 'cumples', 'isCumple', 'eventos', 'permisos', 'slider', 'renderButtonMarcacion'));
        } else {
            return view("Login.login");
        }
    }

    public function asignar()
    {
        $date = Carbon::now();

        $submenus = [["sme_id" => 45], ["sme_id" => 53]]; // DB::select('SELECT * FROM tbl_submenus where sme_defaulf =1');
        $usuarios = DB::select("select * from tbl_usuarios");
        //return $usuarios;
        foreach ($usuarios as $user) {
            foreach ($submenus as $s) {
                //return $s['sme_id'];
                $usu_menu = DB::select('select * from tbl_usuarios_menus where um_id_usuario = ? and um_id_submenu=?', [$user->usu_id, $s['sme_id']]);
                if ($usu_menu == []) {
                    $asi = DB::table('tbl_usuarios_menus')->insert([
                        'um_id_usuario' => $user->usu_id,
                        'um_id_submenu' => $s['sme_id'],
                        'um_estado' => '1',
                        'um_fecha' => $date
                    ]);
                }
            }
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
