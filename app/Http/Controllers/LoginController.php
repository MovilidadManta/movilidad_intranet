<?php

namespace App\Http\Controllers;


use Session;
use Redirect;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (session::get('usuario')) {
            return redirect('/home');
        } else {
            return view("Login.login");
        }
    }

    public function index2()
    {
        if (session::get('usuario')) {
            return redirect('/home');
        } else {
            return view("Administrador.Login.login2");
        }
    }

    public function index3()
    {
        if (session::get('usuario')) {
            return redirect('/home');
        } else {
            return view("Administrador.Login.login3");
        }
    }

    public function iniciar_sesion(Request $request)
    {
        $ip = request()->ip();
        $user = $request->input('txt-usuario');
        $id_proyecto = 1;
        /*$pos = strpos($user, "@");
        if (!$pos) {
            $user  =  $user . '@movilidadmanta.gob.ec';
        }*/
        $sql = DB::connection('pgsql')->Select("select * from public.view_usuarios where emp_cedula=?", [$user]);

        //return $sql;
        if ($sql != []) {
            foreach ($sql as $r) {
                $clave = $r->contraseña;
            }

            if (Hash::check($request->input('txt-clave'), $clave)) {
                // $datos_usuarios = DB::connection('pgsql')->table("public.view_usuarios")->where("correo", "=", $user)->get();
                $id_empleado = '';
                
                foreach ($sql as $usuario) {
                    $request->session()->put('usuario', $usuario->correo);
                    $request->session()->put('tipo_usuario', $usuario->tipo_usuario);
                    $request->session()->put('id_users', $usuario->usu_id);
                    $request->session()->put('ruta_foto', $usuario->emp_ruta_foto);
                    $request->session()->put('nombres', $usuario->emp_nombre);
                    $request->session()->put('apellidos', $usuario->emp_apellido);
                    $request->session()->put('id_jefatura', $usuario->emp_id_perfil);
                    $request->session()->put('id_departamento', $usuario->emp_id_departamento);
                    $request->session()->put('id_empleado', $usuario->cod_empleado);
                    $request->session()->put('cedula', $usuario->emp_cedula);
                    $request->session()->put('cargo', $usuario->ca_cargo);
                    $request->session()->put('emp_id_cargo', $usuario->emp_id_cargo);
                    $request->session()->put('id_proyecto', env('APP_ID_PROYECTO', '1'));
                    $id_empleado = $usuario->cod_empleado;

                    $marcaciones_remota =  DB::connection('pgsql')->Select("
                        SELECT cer_id FROM public.tbl_conf_empleado_remoto 
                        WHERE emp_id=? AND cer_estado = true
                        AND (
                        (cer_tiene_fecha_fin = FALSE AND NOW()::date >= cer_fecha_inicio) OR 
                        (cer_tiene_fecha_fin = TRUE AND NOW()::date BETWEEN cer_fecha_inicio AND cer_fecha_fin)
                        )
                        ORDER BY cer_id
                        ", [$usuario->cod_empleado]);

                    if(count($marcaciones_remota) > 0){
                        $request->session()->put('cer_id', $marcaciones_remota[0]->cer_id);
                    }
                }

                return response()->json(["respuesta" => true, 'sms' => $id_empleado]);
            } else {
                return response()->json(["respuesta" => false, "sms" => "PASS FAIL"]);
            }
        } else {
            return response()->json(["respuesta" => false, "sms" => "USER FAIL"]);
        }
        
        
    }

    public function cerrar_sesion()
    {
        Session::flush();
        return Redirect::to('/');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $consulta = DB::table('view_usuarios')->get();
        return $consulta;
    }

    public function reset()
    {
        $cl = new HomeController();
        $menus_ = $cl->GET_menus_asign();
        $cumples = $cl->GET_Cumpleaños();
        $eventos = $cl->GET_events();
        //DB::connection('pgsql')->table("public.view_usuarios")->where("correo", "=", $user)->get();
        return view('ReinicioC.index', compact('menus_', 'cumples', 'eventos'));
    }

    public function cambiar(Request $r)
    {
        $datos_usuarios = DB::connection('pgsql')->table("public.view_usuarios")->where("correo", "=", Session::get('usuario'))->get();
        $clave_ = "";
        $id_usu = "";
        foreach ($datos_usuarios as $u) {
            $clave_ = $u->contraseña;
            $id_usu = $u->usu_id;
        }
        //return $clave_;
        if (Hash::check($r->contrasena, $clave_)) {
            $ip = request()->ip();
            $user = session::get('id_users');

            $json[] = [
                'id_usuario' => $id_usu,
                'clave' => Hash::make($r->new_contrasena)
            ];
            $jsoninsert = json_encode($json);
            $sql = DB::Select('select public.procedimiento_modificar_clave_datos_usuario_id(?,?,?)', [$jsoninsert, $ip, $user]);
            foreach ($sql as $s) {
                $id = $s->procedimiento_modificar_clave_datos_usuario_id;
            }
            if ($sql != "[]") {
                return response()->json(['respuesta' => true, "data" => $id, "sql" => $sql]);
            } else {
                return response()->json(["respuesta" => false]);
            }
            //   return response()->json(["clave" => true]);
        } else {
            return response()->json(["clave" => false]);
        }
    }
}
