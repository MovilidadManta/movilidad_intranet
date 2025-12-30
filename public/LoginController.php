<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Session;
use DB;
use Redirect;

class LoginController extends Controller
{
    public function index()
    {
        if (Session::get('C_SES_USER')) {
            return Redirect::to('home');
        } else {
            return view("login");
        }
    }

    public function login(Request $request)
    {
        $user = $request->user;
        $pass = $request->clave;
        $ip = request()->ip();
        $id_proyecto = 1;
        /*$pos = strpos($user, "@");
        if (!$pos) {
            $user  =  $user . '@movilidadmanta.gob.ec';
        }*/
        $sql = DB::connection('pgsql')->Select("select * from public.view_usuarios where emp_cedula=?", [$user]);
        if ($sql != []) {
            foreach ($sql as $r) {
                $clave = $r->contraseña;
            }

            if (Hash::check($pass, $clave)) {
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
                    Session::put('C_SES_NAME', $usuario->emp_nombre); // GUARDAMOS EL ID DEL USUARIOS EN LA SESSION
                    Session::put('C_SES_USER', $usuario->usu_id);
                    $request->session()->put('id_proyecto', env('APP_ID_PROYECTO', '1'));
                    $id_empleado = $usuario->cod_empleado;
                }
                //return Redirect::to('home');
                return response()->json(["respuesta" => true, 'tipo' => 'ok', 'sms' => $id_empleado]);
            } else {
                return response()->json(["respuesta" => false, "sms" => "PASS FAIL"]);
            }
        } else {
            return response()->json(["respuesta" => false, "sms" => "USER FAIL"]);
        }
    }

    public function login2(Request $r)
    {
        $user = $r->user;
        $pass = $r->clave;

        $usuario = DB::table('pre_usuarios')->where('name', '=', $user)->get();

        if ($usuario == []) {
            return response()->json(["respuesta" => false, "tipo" => "correo"]);
        } else {
            $clave = DB::table('pre_usuarios')->where([['name', '=', $user], ['pass', '=', $pass]])->get();
            //return $clave;
            if ($clave == []) {
                return response()->json(["respuesta" => false, "tipo" => "clave"]);
            } else {
                foreach ($clave as $c) {
                    Session::put('C_SES_NAME', $c->name); // GUARDAMOS EL ID DEL USUARIOS EN LA SESSION
                    Session::put('C_SES_USER', $c->id);
                }
                return response()->json(["respuesta" => true, "tipo" => "ok"]);
            }
        }
        //        return $usuario;
    }

    public function logout()
    {

        Session::flush();
        return Redirect::to('/');
    }
}
