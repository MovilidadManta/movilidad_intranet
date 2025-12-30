<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\HomeController;

use Illuminate\Support\Facades\Mail;

use App\Mail\EnviarCodeQr;

use App\Mail\EnviarCodigo;

use \Mpdf\Mpdf as PDF;

use Illuminate\Support\Str;

use Carbon\Carbon;

use Illuminate\Support\Facades\Redirect;

use SimpleSoftwareIO\QrCode\Facades\QrCode;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use setasign\Fpdi\Fpdi;
use FPDF;

use DB;

use Session;

use Storage;

use File;

use DateTime;
use PHPExcel;
use PHPExcel_IOFactory;
use PHPExcel_Style_Alignment;
use PHPExcel_Style_Border;
use PHPExcel_Style_Fill;
use PHPExcel_Cell_DataType;
use PHPExcel_Worksheet_Drawing;
use PHPExcel_Worksheet;
use Drawing;
use Worksheet;
use Exception;


class PermisosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return Session::get('cedula');
        if (Session::get('usuario')) {
            $date = Carbon::now();
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

            $permisos = DB::table('tbl_tipos_permisos')->where('estado', '1')->get();
            // return $permiso;
            $dias_disponibles = DB::select("select e.emp_fecha_ingreso,e.emp_cedula, sum(ep.valor)as dias from tbl_empleados e 
            LEFT JOIN tbl_empleados_periodos ep ON CAST(e.emp_cedula AS integer) = ep.id_empleado 
            where  e.emp_estado = 'A' and emp_cedula=? GROUP BY e.emp_fecha_ingreso, e.emp_cedula", [Session::get('cedula')]);
            $fecha_actual = DB::select('select now()::date as fecha_actual');

            // return $dias_disponibles;   

            $f = explode("-", $dias_disponibles[0]->emp_fecha_ingreso);
            //return $f;
            $datetimei = new DateTime($date);
            $datetimef = new DateTime($f[0] . "-" . $f[1] . "-" . $f[2] . " 00:00:00");
            $intervalf = $datetimef->diff($datetimei);
            $intervalDiasf = $intervalf->format("%d");
            $intervalMesesf = $intervalf->format("%m");
            $intervalAnosf = $intervalf->format("%y") * 12;
            $intervalMesesf += $intervalAnosf;
            $fecha_actual = $fecha_actual[0]->fecha_actual;
            //return $fecha_actual;
            //return $intervalMesesf;
            return view('Permisos.index', compact('menus_', 'cumples', 'isCumple', 'eventos', 'permisos', 'intervalMesesf', 'dias_disponibles', 'fecha_actual'));
        } else {
            return view("Login.login");
        }
    }

    public function index_prueba()
    {
        // return Session::get('cedula');
        if (Session::get('usuario')) {
            $date = Carbon::now();
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

            $permisos = DB::table('tbl_tipos_permisos')->where('estado', '1')->get();
            // return $permiso;
            $dias_disponibles = DB::select("select e.emp_fecha_ingreso,e.emp_cedula, sum(ep.valor)as dias from tbl_empleados e 
            LEFT JOIN tbl_empleados_periodos ep ON CAST(e.emp_cedula AS integer) = ep.id_empleado 
            where  e.emp_estado = 'A' and emp_cedula=? GROUP BY e.emp_fecha_ingreso, e.emp_cedula", [Session::get('cedula')]);

            // return $dias_disponibles;   

            $f = explode("-", $dias_disponibles[0]->emp_fecha_ingreso);
            //return $f;
            $datetimei = new DateTime($date);
            $datetimef = new DateTime($f[0] . "-" . $f[1] . "-" . $f[2] . " 00:00:00");
            $intervalf = $datetimef->diff($datetimei);
            $intervalDiasf = $intervalf->format("%d");
            $intervalMesesf = $intervalf->format("%m");
            $intervalAnosf = $intervalf->format("%y") * 12;
            $intervalMesesf += $intervalAnosf;
            //return $intervalMesesf;
            return view('Permisos.index_prueba', compact('menus_', 'cumples', 'isCumple', 'eventos', 'permisos', 'intervalMesesf', 'dias_disponibles'));
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
        if (Session::get('usuario')) {
            $cl = new HomeController();
            $menus_ = $cl->GET_menus_asign();
            $cumples = $cl->GET_Cumpleaños();
            $eventos = $cl->GET_events();
            $permisos = $cl->GET_PERMISOS();

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

            // $permisos = DB::table('tbl_tipos_permisos')->get();
            // return $permiso;

            return view('Permisos.lista_permisos', compact('menus_', 'cumples', 'isCumple', 'eventos', 'permisos',));
        } else {
            return Redirect("/");
        }
    }

    public function create_reporte_solicitudes()
    {
        if (Session::get('usuario')) {
            $cl = new HomeController();
            $menus_ = $cl->GET_menus_asign();
            $cumples = $cl->GET_Cumpleaños();
            $eventos = $cl->GET_events();
            $permisos = $cl->GET_PERMISOS();


            //return $permisos_aprobados;
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

            // $permisos = DB::table('tbl_tipos_permisos')->get();
            // return $permiso;

            return view('Permisos.reporte_permisos', compact('menus_', 'cumples', 'isCumple', 'eventos', 'permisos'));
        } else {
            return Redirect("/");
        }
    }

    public function get_permisos()
    {
        $cl = new HomeController();
        $permisos = $cl->GET_PERMISOS();

        if ($permisos != []) {
            return response()->json(["res" => true, "data" => $permisos]);
        } else {
            return response()->json(["res" => false,]);
        }
    }

    public function get_reporte_permisos($fecha_inicio, $fecha_fin)
    {
        $cl = new HomeController();
        $permisos = $cl->GET_PERMISOS_SOLICITUDES($fecha_inicio, $fecha_fin);

        if ($permisos != []) {
            return response()->json(["res" => true, "data" => $permisos]);
        } else {
            return response()->json(["res" => false,]);
        }
    }

    public function permisos()
    {
        if (Session::get('usuario')) {
            $cl = new HomeController();
            $menus_ = $cl->GET_menus_asign();
            $cumples = $cl->GET_Cumpleaños();
            $eventos = $cl->GET_events();
            $permisos = DB::select("SELECT p.* ,tp.tipo_permiso  FROM tbl_permisos p 
            INNER JOIN tbl_tipos_permisos tp ON tp.id = p.id_tipo_permiso
            where p.id_empleado = ? order by p.id DESC", [Session::get('cedula')]);

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

            // $permisos = DB::table('tbl_tipos_permisos')->get();
            // return $permiso;

            return view('Permisos.mis_permisos', compact('menus_', 'cumples', 'isCumple', 'eventos', 'permisos'));
        } else {
            return view("Login.login");
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $date = Carbon::now();
        $ip = request()->ip();
        $user = session::get('id_users');


        //$doc =  file_get_contents(base64_encode($request->fileURL));

        /* $jefe = DB::select("select concat(e.emp_nombre,' ', e.emp_apellido) as empleado, e.emp_cedula,c.ca_cargo, (select em.emp_cedula from tbl_empleados em 
        INNER JOIN tbl_cargos cc ON cc.ca_id= em.emp_id_cargo
        WHERE cc.ca_id=e.emp_id_cargo_jefe  and em.emp_estado='A') as jefe_inmediato
        from tbl_empleados e 
        INNER JOIN tbl_cargos c ON c.ca_id = e.emp_id_cargo
        WHERE e.emp_estado ='A'
        and e.emp_cedula = ?", [$request->cedula_solicitante]);*/

        $jefe = DB::select("select * from tbl_empleados e
        INNER JOIN 
        view_organigrama  o ON o.cargo_jefe = e.emp_id_cargo
        where pic = ? and e.emp_estado = 'A'", [$request->cedula_solicitante]);

        $jefe_im = "";
        if ($jefe != '[]') {
            foreach ($jefe as $j) {
                $jefe_im = $j->emp_cedula;
            }
            //return $jefe_im;
            if ($jefe_im == null || $jefe_im == "") {
                return response()->json(["respuesta" => false, "sms" => "sinjefe"]);
            }
            if ($request->estado_documento == 1) {
                //variable
                $fileURL_ = explode(";", $request->fileURL_);
                $fileURL_ = substr($fileURL_[1], 7);
                $ifp = fopen($request->file_name_, 'wb');
                fwrite($ifp, base64_decode($fileURL_));
                fclose($ifp);
                $name_file = date("Ymdsm") . $request->file_name_;
                //return $fileURL_;
                $ftp = Storage::disk('ftp_movilidad')->put("/respaldos/" . $name_file, File::get($request->file_name_));
                if ($ftp) {

                    $permiso = DB::table('public.tbl_permisos')->insertGetId([
                        'id_tipo_permiso' => $request->tipo_solicitud,
                        'id_empleado' => $request->cedula_solicitante,
                        'fecha_inicio' => $request->fecha_inicial,
                        'fecha_final' => $request->fecha_final,
                        'documento' => "respaldos/" . $name_file,
                        'file_name' => $name_file,
                        'fecha_solicitud' => $request->fecha_solicitud,
                        'estado' => $request->estado,
                        'jefe_imediato' => $jefe_im,
                        'total_dias' => $request->diasDeDiferencia,
                        'observacion' => $request->observacion,
                        'formulario' => "formularios/" . $request->url_formulario,
                        'tipo_enfermedad' => $request->tipo_enfermedad,
                        'hora_inicio' => $request->hora_inicial,
                        'hora_final' => $request->hora_final,
                        'total_horas' => $request->total_horas,
                        'dm_id' => $request->dm_id,
                        'entidad_certifica' => $request->select_entidad_certifica

                    ]);
                } else {
                    return response()->json(array('registro' => false));
                }
            } else {
                $permiso = DB::table('public.tbl_permisos')->insertGetId([
                    'id_tipo_permiso' => $request->tipo_solicitud,
                    'id_empleado' => $request->cedula_solicitante,
                    'fecha_inicio' => $request->fecha_inicial,
                    'fecha_final' => $request->fecha_final,
                    'hora_inicio' => $request->hora_inicial,
                    'hora_final' => $request->hora_final,
                    'total_horas' => $request->total_horas,
                    'fecha_solicitud' => $request->fecha_solicitud,
                    'estado' => $request->estado,
                    'jefe_imediato' => $jefe_im,
                    'total_dias' => $request->diasDeDiferencia,
                    'observacion' => $request->observacion,
                    'formulario' => "formularios/" . $request->url_formulario,
                    'tipo_enfermedad' => $request->tipo_enfermedad,
                    'dm_id' => $request->dm_id
                ]);
            }

            //return $permiso;

            if ($permiso > 0) {
                $jefe__ = DB::select("select * from tbl_empleados where  emp_cedula=? and emp_estado='A'", [$jefe_im]);
                foreach ($jefe__ as $j) {
                    $aprobador = $j->emp_nombre . ' ' . $j->emp_apellido;
                }
                $notificacion = DB::table('public.tbl_mensajes')->insert([
                    'user_to' => $jefe_im,
                    'user_send' => $request->cedula_solicitante,
                    'contenido' => "Tiene un permiso por aprobar",
                    'hora_envio' => $date,
                    'estado' => 0,
                    'tipo_notificaciones' => 2,
                    'asunto' => "SOLICITUD DE PERMISO",
                ]);

                if (isset($request->fm_id)) {
                    $json[] = [
                        'id' => $request->fm_id,
                        'id_permiso' => $permiso
                    ];
                    $jsoninsert = json_encode($json);
                    $sql = DB::Select('select medico.procedimiento_vincular_permiso_tbl_ficha_medica(?,?, ?)', [$jsoninsert, $ip, $user]);
                }

                return response()->json(["respuesta" => true, "sms" => "permiso guardado correctamente", "aprobador" => $aprobador]);
            } else {
                return response()->json(["respuesta" => false,]);
            }
        } else {
            return response()->json(["respuesta" => false, "sms" => "sinjefe"]);
        }
    }

    private function guardar_registro_accion_personal($emp_cedula, $tipo_permiso, $id_permiso, $fecha_accion_personal, $ip, $user)
    {
        $mensaje = "";
        /*
        $empleadoData = DB::Select("SELECT emp_id FROM tbl_empleados WHERE emp_cedula = '{$emp_cedula}'");
        $directorTTHHData = DB::Select("SELECT emp_id FROM tbl_empleados WHERE emp_id_cargo = 66 AND emp_estado = 'A'");
        $list_tipos_permisos = [1,9];
        if(in_array($tipo_permiso, $list_tipos_permisos)){
            $tipo_accion_personal = 20;
            if($tipo_permiso == 1){
                $tipo_accion_personal = 21;
            }
            if(count($directorTTHHData) > 0){
                $directorTTHH = $directorTTHHData[0];
                $empleado = $empleadoData[0];
                $json[] = [
                    'emp_id'=> $empleado->emp_id,
                    'tap_id' => $tipo_accion_personal,
                    'emp_cedula' => $emp_cedula,
                    'ap_emp_id_tthh' => $directorTTHH->emp_id,
                    'ap_id_permiso' =>$id_permiso,
                    'ap_fecha_accion_personal' =>$fecha_accion_personal
                ];
                $jsoninsert = json_encode($json);
                $sql = DB::Select('select public.procedimiento_registrar_tbl_accion_personal(?,?, ?)', [$jsoninsert, $ip, $user]);
            }else{
                $mensaje = "No existe director de talento humano vigente";
            }
        }
        */
        return $mensaje;
    }

    public function enviar_codigo(Request $r)
    {
        $date = Carbon::now();
        $code = Str::upper(Str::random(6));
        $cedula = Session::get('cedula');
        $usuario = Session::get('nombres') . ' ' . Session::get('apellidos');
        $correo = Session::get('usuario');
        $codigo = DB::table('public.tbl_codigos_permisos')->insertGetId([
            'co_codigo' => $code,
            'co_cedula_usuario' => $cedula,
            'estado' => 2,
            'created_at' => $date
        ]);

        if ($codigo) {
            $email = Mail::to($correo, $usuario)->send(new EnviarCodigo($code, $usuario));
            return response()->json(["res" => true, "sms" => "9999", "Code" => $code, "id_permiso" => $r->id_permiso]);
        } else {
            return response()->json(["res" => false, "sms" => "9998"]);
        }
    }

    public function estado_permiso(Request $r)
    {
        $date = Carbon::now();

        $jefe_im = Session::get('cedula');
        $estado = '';
        if ($r->tipo == 1) {
            $estado = 'APROBADO';
        } else {
            $estado = 'RECHAZADO';
        }

        $dele = DB::update('update tbl_permisos set estado=?, observacion_rechazo=? where id=?', [$estado, $r->observacion, $r->id_permiso]);

        if ($dele > 0) {
            $usuario_solicitante = DB::select("SELECT * FROM tbl_permisos where id=?", [$r->id_permiso]);
            $cedula = "";
            foreach ($usuario_solicitante as $us) {
                $cedula = $us->id_empleado;
            }
            // notificar al usuario
            $notificacion = DB::table('public.tbl_mensajes')->insert([
                'user_to' => $cedula,
                'user_send' => $jefe_im,
                'contenido' => "<p>Tu permiso a sido " . $estado . " <a href='/permisos'>ver mas..</a></p>",
                'hora_envio' => $date,
                'estado' => 0,
                'tipo_notificaciones' => 2,
                'asunto' => "SOLICITUD DE PERMISO " . $estado,
            ]);
            return response()->json(["res" => true, "sms" => $estado]);
        } else {
            return response()->json(["res" => false, "sms" => "9998"]);
        }
    }
    public function descargar_archivo($ruta)
    {
        $ruta = base64_decode($ruta);
        $ruta = trim($ruta, '"');
        return Storage::disk('ftp_movilidad')->download("/" . $ruta);
    }

    public function v_permiso()
    {
        $logo = public_path('/img/logo.png');
        $l = base64_encode(file_get_contents($logo));
        $json_data = ["img" => $l];

        return view('Permisos.formatos.pdf', $json_data);
    }
    public function view_permiso()
    {
        // Setup a filename 
        $documentFileName = "fun.pdf";

        // Create the mPDF document
        $document = new PDF([
            'mode' => 'utf-8',
            'format' => 'A4',
            'margin_header' => '3',
            'margin_top' => '10',
            'margin_bottom' => '20',
            'margin_left' => '20',
            'margin_footer' => '2',
        ]);

        // Set some header informations for output
        $header = [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'inline; filename="' . $documentFileName . '"'
        ];


        $logo = public_path('/img/logo.png');
        $l = base64_encode(file_get_contents($logo));
        $json_data = ["img" => $l];
        //return $json_data;
        $html = view('Permisos.formatos.9', $json_data)->render();

        // Write some simple Content
        $document->WriteHTML($html);

        // Save PDF on your public storage 
        Storage::disk('public')->put($documentFileName, $document->Output($documentFileName, "S"));

        // Get file back from storage with the give header informations
        return Storage::disk('public')->download($documentFileName, 'Request', $header);
    }
    public function enviar_code_qr2()
    {
        /*$logo = public_path('/img/logo.png');
        $l =  base64_encode(file_get_contents($logo));*/

        $email = Mail::to('jhony.guaman@movilidadmanta.gob.ec', 'Jhony Guaman')->send(new EnviarCodeQr('12345'));
        return "";
    }

    public function enviar_code_qr(Request $r)
    {
        /*$logo = public_path('/img/logo.png');
        $l =  base64_encode(file_get_contents($logo));*/

        $cedula = Session::get('cedula');
        $code = Str::upper(Str::random(6));
        $usuario = DB::select('select * from view_usuarios where emp_cedula = ? ', [$cedula]);
        $user = $usuario[0];

        $codigo = $this->generate_code_qr($r, $code, $cedula);

        if ($codigo) {
            $email = Mail::to($user->correo, $user->emp_nombre . " " . $user->emp_apellido)->send(new EnviarCodeQr($code));
            return response()->json(["res" => true, "sms" => "9999", "Code" => $code]);
        } else {
            return response()->json(["res" => false, "sms" => "9998"]);
        }
    }

    public function estampar_codigo(Request $r)
    {
        $DDMMYYY_ = date('Ymd');
        $HMS = date('His');
        $cedula = Session::get('cedula');
        $codigo = DB::select('select * from tbl_codigos_permisos where co_cedula_usuario=? and co_codigo=?', [$cedula, $r->codigo]);
        //return $codigo;
        if ($codigo == []) {
            return response()->json(["res" => false, "sms" => "9998"]);
        } else {
            foreach ($codigo as $c) {
                $id_c = $c->id;
            }
            $dele = DB::update('update tbl_codigos_permisos set estado=1 where id=?', [$id_c]);
            $documentFileName = $DDMMYYY_ . '_' . $HMS . '_' . $r->cedula_solicitante . "_firmado.pdf";
            $ftp = $this->save_file_pdf_formato_permiso($r, $documentFileName);
            if ($ftp) {
                return response()->json(["res" => true, "code" => 200, "m" => "documento firmado y subido al ftp", "u" => $documentFileName]);
            } else {
                return response()->json(["res" => false, "code" => 500, "m" => "error al subir el archivo"]);
            }
        }
    }

    public function estampar_codigo_jefe(Request $r)
    {
        $date = Carbon::now();

        $cedula = Session::get('cedula');
        $codigo = DB::select('select * from tbl_codigos_permisos where co_cedula_usuario=? and co_codigo=?', [$cedula, $r->codigo]);
        $ip = request()->ip();
        $user = session::get('id_users');
        //return $codigo;
        if ($codigo == []) {
            return response()->json(["res" => false, "sms" => "9998"]);
        } else {
            foreach ($codigo as $c) {
                $id_c = $c->id;
            }
            $permiso = DB::select('select * from tbl_permisos where id = ?', [$r->id_permiso]);
            if ($permiso == '[]') {
                return response()->json(["res" => false, "code" => 4004, "m" => "permiso no existe"]);
            } else {
                $DDMMYYY_ = date('Ymd');
                $HMS = date('His');
                foreach ($permiso as $p) {
                    //$file = "formularios/20231106_104816_1312320466_firmado.pdf";
                    $file = $p->formulario;
                }
                if (!isset($file) || $file != "") {
                    $name_file = explode("/", $file);
                    $filePath = Storage::disk('ftp_movilidad')->get($file);
                    Storage::disk('documentos')->put("TEMP_" . $name_file[1], $filePath);
                    $doc = public_path("documentos/TEMP_" . $name_file[1]);
                    $doc_out = public_path("documentos/TEMP_output_" . $name_file[1]);
                    $ffile = $this->fillPDFFile($doc, $doc_out, Session::get('nombres') . ' ' . Session::get('apellidos'), $name_file[1], $id_c);
                    if ($ffile) {
                        $dele = DB::update('update tbl_codigos_permisos set estado=3 where id=?', [$id_c]);
                        //APROBAR EL PERMISO POR EL JEFE 
                        $deles = DB::update('update tbl_permisos set estado=? where id=?', ["APROBADO", $r->id_permiso]);
                        if ($deles > 0) {
                            // NOTIFICAR QUE SU PERMISO A SIDO APROBADO

                            $usuario_solicitante = DB::select("SELECT * FROM tbl_permisos where id=?", [$r->id_permiso]);
                            $cedula_ = "";
                            //return $usuario_solicitante;
                            foreach ($usuario_solicitante as $us) {
                                $cedula_ = $us->id_empleado;
                                $jefe_im = $us->jefe_imediato;
                            }
                            // notificar al usuario
                            $notificacion = DB::table('public.tbl_mensajes')->insert([
                                'user_to' => $cedula_,
                                'user_send' => $jefe_im,
                                'contenido' => "<p>Tu permiso a sido APROBADO <a href='/permisos'>ver mas..</a></p>",
                                'hora_envio' => $date,
                                'estado' => 0,
                                'tipo_notificaciones' => 2,
                                'asunto' => "SOLICITUD DE PERMISO - APROBADO",
                            ]);

                            $permisoEmpleado = $permiso[0];

                            $mensaje = $this->guardar_registro_accion_personal($permisoEmpleado->id_empleado, $permisoEmpleado->id_tipo_permiso, $permisoEmpleado->id, $permisoEmpleado->fecha_solicitud, $ip, $user);

                            $mensaje = $mensaje == "" ? "documento firmado y subido al ftp" : $mensaje;

                            return response()->json(["res" => true, "code" => 200, "m" => $mensaje, "u" => "formularios/" . $name_file[1]]);
                        } else {
                            return response()->json(["res" => false, "sms" => "9998"]);
                        }
                    } else {
                        return response()->json(["res" => false, "code" => 500, "m" => "error al subir el archivo firmado"]);
                    }
                }
            }
        }
    }
    public function vista_previa_documento(Request $r)
    {
        // return $r;
        // Setup a filename 
        $documentFileName = "temp_" . $r->cedula_solicitante . ".pdf";

        // Create the mPDF document
        $document = new PDF([
            'mode' => 'utf-8',
            'format' => 'A4',
            'margin_header' => '3',
            'margin_top' => '10',
            'margin_bottom' => '20',
            'margin_left' => '20',
            'margin_footer' => '2',
        ]);

        // Set some header informations for output
        $header = [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'inline; filename="' . $documentFileName . '"'
        ];


        $logo = public_path('/img/logo.png');
        $l = base64_encode(file_get_contents($logo));

        $empleado = DB::select('select j.per_perfil, e.* , c.ca_cargo from tbl_empleados e 
        INNER JOIN tbl_cargos c ON c.ca_id = e.emp_id_cargo
        INNER JOIN tbl_jefaturas_subdirecciones j ON j.per_id = c.ca_id_jefatura
        where emp_cedula=?', [$r->cedula_solicitante]);
        //return $empleado;
        $array[] = array(
            "tipo_permiso" => $r->sel_tipo_permiso,
            "desde" => $r->desde,
            "hasta" => $r->hasta,
            "h_inicio" => $r->hora_inicial,
            "h_final" => $r->hora_final,
            "observacion" => $r->observacion,
            "fecha_solicitud" => date('Y-m-d'),
            "total_dias" => $r->diasDeDiferencia,
            "cedula" => $r->cedula_solicitante,
            "empleado" => $empleado,
            "total_horas" => $r->total_horas,
            "tipo_enfermedad" => $r->tipo_enfermedad

        );
        $json_data = [
            "img" => $l,
            "datos" => $array
        ];
        //return $json_data;
        $html = view('Permisos.formatos.' . $r->sel_tipo_permiso, $json_data)->render();

        // Write some simple Content
        $document->WriteHTML($html);

        // Save PDF on your public storage 
        Storage::disk('public')->put($documentFileName, $document->Output($documentFileName, "S"));

        // Get file back from storage with the give header informations
        return response()->json(["res" => true, "url" => $documentFileName]);
    }

    public function firmar_jefe()
    {

        $file = "formularios/20231106_104816_1312320466_firmado.pdf";
        $filePath = Storage::disk('ftp_movilidad')->get($file);




        Storage::disk('documentos')->put("TEMP_20231106_104816_1312320466_firmado.pdf", $filePath);


        $doc = public_path("documentos/TEMP_20231106_104816_1312320466_firmado.pdf");
        $doc_out = public_path("documentos/TEMP_20231106_104816_1312320466_firmado_output.pdf");
        // $this->fillPDFFile($doc, $doc_out);
    }
    public function fillPDFFile($file, $outputFilePath, $jefe, $file_name, $id_c)
    {
        require '../vendor/autoload.php';
        $fpdi = new Fpdi();
        // or
        $count = $fpdi->setSourceFile($file);
        //return $count;
        for ($i = 1; $i <= $count; $i++) {

            $template = $fpdi->importPage($i);
            $size = $fpdi->getTemplateSize($template);
            $fpdi->AddPage($size['orientation'], array($size['width'], $size['height']));
            $fpdi->useTemplate($template);

            $fpdi->SetFont("helvetica", "", 15);
            $fpdi->SetTextColor(153, 0, 153);

            $left = 10;
            $top = 10;
            /*$text = "itsolutionstuff.com";
            $fpdi->Text($left, $top, $text);*/
            $name_qr = time() . '.png';
            $path = public_path('documentos/' . $name_qr);
            $image = QrCode::format('png')->generate("Permiso aprobado por: " . $jefe, $path);
            //$output_file = 'img-' . time() . '.png';
            //Storage::disk('documentos')->put($output_file, $image);

            $fpdi->Image($path, 137, 128, 20, 20);
        }
        $fpdi->Output($outputFilePath, 'F');
        $ftp = Storage::disk('ftp_movilidad')->put("/formularios/" . $file_name, Storage::disk('documentos')->get("TEMP_output_" . $file_name));

        //ELELMINAR QR TEMPORAL
        Storage::disk('documentos')->delete($name_qr);
        Storage::disk('documentos')->delete("TEMP_" . $file_name);
        Storage::disk('documentos')->delete("TEMP_output_" . $file_name);
        if ($ftp) {
            //$dele = DB::update('update tbl_codigos_permisos set estado=3 where id=?', [$id_c]);
            return true;
        } else {
            return false;
            //return response()->json(["res" => false, "code" => 500, "m" => "error al subir el archivo"]);
        }
        // $ftp = Storage::disk('ftp_movilidad')->put("formularios/" . $outputFilePath, $fpdi->Output($outputFilePath, 'F'));
    }


    public function vacaciones()
    {
        if (Session::get('usuario')) {
            $cl = new HomeController();
            $menus_ = $cl->GET_menus_asign();
            $cumples = $cl->GET_Cumpleaños();
            $eventos = $cl->GET_events();
            // $permisos = $cl->GET_PERMISOS();
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

            $vacaciones = DB::select('select * from view_periodos_vacaciones where emp_cedula=?', [Session::get('cedula')]);
            $detalles_vacaciones = DB::select('select * from tbl_empleado_detalle_descuentos where id_empleado=?', [Session::get('cedula')]);


            return view('Vacaciones.index', compact('menus_', 'cumples', 'isCumple', 'eventos', 'vacaciones', 'detalles_vacaciones'));
        } else {
            return Redirect("/");
        }
    }

    public function get_reporte_permisos_pdf($fecha_inicio, $fecha_fin)
    {
        // return $r;
        // Setup a filename 
        $documentFileName = "temp_.pdf";

        // Create the mPDF document
        $document = new PDF([
            'mode' => 'utf-8',
            'format' => 'A4',
            'margin_header' => '3',
            'margin_top' => '10',
            'margin_bottom' => '20',
            'margin_left' => '20',
            'margin_footer' => '2',
            'orientation' => 'L',
        ]);

        // Set some header informations for output
        $header = [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'inline; filename="' . $documentFileName . '"'
        ];


        $logo = public_path('/img/logo.png');
        $l = base64_encode(file_get_contents($logo));

        /*$empleado = DB::select('select j.per_perfil, e.* , c.ca_cargo from tbl_empleados e 
            INNER JOIN tbl_cargos c ON c.ca_id = e.emp_id_cargo
            INNER JOIN tbl_jefaturas_subdirecciones j ON j.per_id = c.ca_id_jefatura
            where emp_cedula=?', [$r->cedula_solicitante]);
        //return $empleado;
        $array[] = array(
            "tipo_permiso" => $r->sel_tipo_permiso,
            "desde" => $r->desde,
            "hasta" => $r->hasta,
            "h_inicio" => $r->hora_inicial,
            "h_final" => $r->hora_final,
            "observacion" => $r->observacion,
            "fecha_solicitud" => date('Y-m-d'),
            "total_dias" => $r->diasDeDiferencia,
            "cedula" => $r->cedula_solicitante,
            "empleado" => $empleado,
            "total_horas" => $r->total_horas,
            "tipo_enfermedad" => $r->tipo_enfermedad

        );*/

        $cl = new HomeController();
        $permisos = $cl->GET_PERMISOS_SOLICITUDES($fecha_inicio, $fecha_fin);
        $json_data = [
            "img" => $l,
            "direccion" => 0,
            "niveles" => 0,
            "usuario" => 0,
            "fecha_actual" => 0,
            "hora_actual" => 0,
            "hora_actual" => 0,
            "datos" => $permisos
        ];
        //return $json_data;
        $html = view('Permisos.reporte_pdf_permisos', $json_data)->render();

        // Write some simple Content
        $document->WriteHTML($html);
        //$document->Output('download.pdf', 'I');
        $document->Output('download.pdf', 'D');
    }

    public function get_reporte_permisos_excell($fecha_inicio, $fecha_fin)
    {
        require '../vendor/autoload.php';
        $spreadsheet = new Spreadsheet();
        date_default_timezone_set('America/Guayaquil');
        $accion = 'ver';
        $tipo = 'fisico';
        $user = session::get('usuario');
        $date = Carbon::now();
        $fecha = $date->toDateString();
        $hora = $date->toTimeString();
        $l = '';

        $cl = new HomeController();
        $permisos = $cl->GET_PERMISOS_SOLICITUDES($fecha_inicio, $fecha_fin);

        $a = date("Y");
        $m = date("m");
        $d = date("d");
        $h = date("H");
        $ii = date("i");
        $s = date("s");
        $mes = '';

        switch ($m) {
            case '1':
                $mes = "Enero";
                break;

            case '2':
                $mes = "Febrero";
                break;

            case '3':
                $mes = "Marzo";
                break;

            case '4':
                $mes = "Abril";
                break;

            case '5':
                $mes = "Mayo";
                break;

            case '6':
                $mes = "Junio";
                break;

            case '7':
                $mes = "Julio";
                break;
            case '8':
                $mes = "Agosto";
                break;
            case '9':
                $mes = "Septiembre";
                break;
            case '10':
                $mes = "Octubre";
                break;
            case '11':
                $mes = "Noviembre";
                break;
            case '12':
                $mes = "Diciembre";
                break;

                $mes = "";
        }

        $spreadsheet = new Spreadsheet();
        /*$spreadsheet
        ->getProperties()
        ->setCreator("Aquí va el creador, como cadena")
        ->setLastModifiedBy('Parzibyte') // última vez modificado por
        ->setTitle('Mi primer documento creado con PhpSpreadSheet')
        ->setSubject('El asunto')
        ->setDescription('Este documento fue generado para parzibyte.me')
        ->setKeywords('etiquetas o palabras clave separadas por espacios')
        ->setCategory('La categoría');*/
        $direccion = '';
        $jefatura = '';
        $regimen_contractual = '';

        $fecharepo = $a . '-' . $mes . '-' . $d;
        $tituloReporte1 = "REPORTE DE SOLICITUDES/PERMISOS DE EMPLEADOS";
        $tituloReporte = "EMPRESA PUBLICA MUNICIPAL MOVILIDAD DE MANTA EP";
        $titulo_direccion_jefa = 'DIRECCION: ' . $direccion . ' || JEFATURA: ' . $jefatura . '  || REGIMEN CONTRACTUAL: ' . $regimen_contractual;
        $titulo_desde_hasta = 'DESDE: ' . $fecha_inicio . ' || HASTA: ' . $fecha_fin;

        $Generado = 'Usuario: ' . $user . ' || Generado: ' . $fecharepo . ' || Hora: ' . $h . 'h' . $ii . ':' . $s;


        $sheet = $spreadsheet->getActiveSheet()
            ->setCellValue('A8', "EMPLEADO")
            ->setCellValue('B8', "TIPO DE PERMISO")
            ->setCellValue('C8', "FECHA INICIO/FECHA FIN")
            ->setCellValue('D8', "T.DIAS")
            ->setCellValue('E8', "FECHA SOLICITUD")
            ->setCellValue('F8', "OBSERVACIÓN")
            ->setCellValue('G8', "OBSERVACIÓN RECHAZO")
            ->setCellValue('H8', "ESTADO");

        $spreadsheet->setActiveSheetIndex(0)
            ->mergeCells('A1:G1');
        $spreadsheet->setActiveSheetIndex(0)
            ->mergeCells('A2:H2');
        $spreadsheet->setActiveSheetIndex(0)->setCellValue('A2', $tituloReporte);
        $spreadsheet->setActiveSheetIndex(0)->mergeCells('A3:H3');
        $spreadsheet->setActiveSheetIndex(0)->setCellValue('A3', $tituloReporte1);

        $spreadsheet->setActiveSheetIndex(0)->mergeCells('A4:H4');
        $spreadsheet->setActiveSheetIndex(0)->setCellValue('A4', $titulo_direccion_jefa);

        $spreadsheet->setActiveSheetIndex(0)->mergeCells('A5:H5');
        $spreadsheet->setActiveSheetIndex(0)->setCellValue('A5', $titulo_desde_hasta);

        $spreadsheet->setActiveSheetIndex(0)->mergeCells('A6:H6');
        $spreadsheet->setActiveSheetIndex(0)->setCellValue('A6', $Generado);

        $spreadsheet->setActiveSheetIndex(0)->mergeCells('A1:H1');
        $spreadsheet->setActiveSheetIndex(0)->mergeCells('A1:F1');
        $spreadsheet->getActiveSheet()->getColumnDimension("A")->setAutoSize(true);
        $spreadsheet->getActiveSheet()->getColumnDimension("B")->setAutoSize(true);
        $spreadsheet->getActiveSheet()->getColumnDimension("C")->setAutoSize(true);
        $spreadsheet->getActiveSheet()->getColumnDimension("D")->setAutoSize(true);
        $spreadsheet->getActiveSheet()->getColumnDimension("E")->setAutoSize(true);
        $spreadsheet->getActiveSheet()->getColumnDimension("F")->setAutoSize(true);
        $spreadsheet->getActiveSheet()->getColumnDimension("G")->setAutoSize(true);

        $negrillaa = array(
            'font' => array(
                'name' => 'Verdana',
                'bold' => true,
                'italic' => false,
                'strike' => false,
                'size' => 10,
                'color' => array(
                    'rgb' => '090909'
                )
            ),
            'borders' => array(
                'allborders' => array(
                    'style' => PHPExcel_Style_Border::BORDER_THIN,
                    'color' => array('argb' => 'FF000000'),
                    'bold' => true,
                )
            ),

        );

        $estiloTituloReporte = array(
            'font' => array(
                'name' => 'Verdana',
                'bold' => true,
                'italic' => false,
                'strike' => false,
                'size' => 14,
                'color' => array(
                    'rgb' => '090909'
                )
            ),
            'fill' => array(
                'type' => PHPExcel_Style_Fill::FILL_SOLID,
            ),
            'borders' => array(
                'allborders' => array(
                    'style' => PHPExcel_Style_Border::BORDER_NONE
                )
            ),
            'alignment' => array(
                'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
                'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER,
                'rotation' => 0,
                'wrap' => true
            )
        );


        $estiloTituloReporte123 = array(
            'font' => array(
                'name' => 'Verdana',
                'bold' => false,
                'italic' => false,
                'strike' => false,
                'size' => 12,
                'color' => array(
                    'rgb' => '090909'
                )
            ),
            'fill' => array(
                'type' => PHPExcel_Style_Fill::FILL_SOLID,
            ),
            'borders' => array(
                'allborders' => array(
                    'style' => PHPExcel_Style_Border::BORDER_NONE
                )
            ),
            'alignment' => array(
                'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
                'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER,
                'rotation' => 0,
                'wrap' => true
            )
        );
        $styleArray = array(
            'font' => array(
                'size' => 12,
                'bold' => true,
            ),
            'alignment' => array(
                'vertical' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
            ),
            'alignment' => array(
                'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
                'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER,
                'rotation' => 0,
                'wrap' => true
            )
        );

        $borders = array(
            'borders' => array(
                'allborders' => array(
                    'style' => PHPExcel_Style_Border::BORDER_THIN,
                    'color' => array('argb' => 'FF000000'),
                    'bold' => true,
                )
            ),
        );

        $spreadsheet->setActiveSheetIndex(0)->getStyle('A2:H2')->applyFromArray($estiloTituloReporte);
        $spreadsheet->getActiveSheet()->getStyle('A2:H2')->applyFromArray($estiloTituloReporte);
        $spreadsheet->getActiveSheet()->getStyle('A8:H8')->applyFromArray($negrillaa);
        // $spreadsheet->getActiveSheet()->getStyle('A4:V4')->applyFromArray($styleArray);
        $spreadsheet->getActiveSheet()->getStyle('A3:H3')->applyFromArray($estiloTituloReporte);
        $spreadsheet->getActiveSheet()->getStyle('A4:H4')->applyFromArray($estiloTituloReporte);
        $spreadsheet->getActiveSheet()->getStyle('A5:H5')->applyFromArray($estiloTituloReporte);
        $spreadsheet->getActiveSheet()->getStyle('A6:H6')->applyFromArray($styleArray);
        $spreadsheet->getActiveSheet()->getStyle('A7:H7')->applyFromArray($styleArray);
        $spreadsheet->getActiveSheet()->getProtection()->setInsertRows(true);
        $spreadsheet->getActiveSheet()->getProtection()->setFormatCells(true);
        $spreadsheet->getActiveSheet()->getProtection()->setSort(true);
        $spreadsheet->getActiveSheet()->getProtection()->setSheet(true);

        $con = 0;
        $i = 9;

        /*$objDrawing = new PHPExcel_Worksheet_Drawing();
        $objDrawing->setName('Logo');
        $objDrawing->setDescription('Logo');
        $logo=public_path('/imagenes_empleados/ALVARO ROBERTO MATUTE ACEBO - 1315258424.png');
        $objDrawing->setPath($logo);
        $objDrawing->setOffsetX(28);
        $objDrawing->setOffsetY(50);
        $objDrawing->setWidth(50);
        $objDrawing->setWorksheet($spreadsheet->Sheet);*/

        foreach ($permisos as $value) {
            //AGREGAR FOTO
            // Add a drawing to the worksheet
            $empleado =  $value->empleado;

            $spreadsheet->setActiveSheetIndex(0)
                ->setCellValueExplicit('A' . $i, $value->empleado, PHPExcel_Cell_DataType::TYPE_STRING)
                ->setCellValueExplicit('B' . $i, $value->tipo_permiso, PHPExcel_Cell_DataType::TYPE_STRING)
                ->setCellValueExplicit('C' . $i, $value->fecha_inicio . ' ' . $value->fecha_final, PHPExcel_Cell_DataType::TYPE_STRING)
                ->setCellValueExplicit('D' . $i, $value->total_dias, PHPExcel_Cell_DataType::TYPE_STRING)
                ->setCellValueExplicit('E' . $i, $value->fecha_solicitud, PHPExcel_Cell_DataType::TYPE_STRING)
                ->setCellValueExplicit('F' . $i, $value->observacion, PHPExcel_Cell_DataType::TYPE_STRING)
                ->setCellValueExplicit('G' . $i, $value->observacion_rechazo, PHPExcel_Cell_DataType::TYPE_STRING)
                ->setCellValueExplicit('H' . $i, $value->estado, PHPExcel_Cell_DataType::TYPE_STRING);
            $i++;
        }

        $activeWorksheet = $spreadsheet->getActiveSheet();

        $writer = new Xlsx($spreadsheet);
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment; filename="' . urlencode('Reporte de Solicitudes y Permisos.xlsx') . '"');
        $writer->save('php://output');
        //$writer->download('hello world.xlsx');
    }

    private function generate_code_qr(Request $r, $code, $cedula)
    {
        $date = Carbon::now();

        $codigo = DB::table('public.tbl_codigos_permisos')->insertGetId([
            'co_codigo' => $code,
            'co_cedula_usuario' => $cedula,
            'estado' => 0,
            'created_at' => $date
        ]);

        return $codigo;
    }

    private function save_file_pdf_formato_permiso(Request $r, $documentFileName)
    {

        // Create the mPDF document
        $document = new PDF([
            'mode' => 'utf-8',
            'format' => 'A4',
            'margin_header' => '3',
            'margin_top' => '10',
            'margin_bottom' => '20',
            'margin_left' => '20',
            'margin_footer' => '2',
        ]);

        $logo = public_path('/img/logo.png');
        $l = base64_encode(file_get_contents($logo));

        $empleado = DB::select('select j.per_perfil, e.* , c.ca_cargo from tbl_empleados e 
    INNER JOIN tbl_cargos c ON c.ca_id = e.emp_id_cargo
    INNER JOIN tbl_jefaturas_subdirecciones j ON j.per_id = c.ca_id_jefatura
    where emp_cedula=?', [$r->cedula_solicitante]);
        //return $empleado;
        $array[] = array(
            "tipo_permiso" => $r->sel_tipo_permiso,
            "desde" => $r->desde,
            "hasta" => $r->hasta,
            "h_inicio" => $r->hora_inicial,
            "h_final" => $r->hora_final,
            "observacion" => $r->observacion,
            "fecha_solicitud" => date('Y-m-d'),
            "total_dias" => $r->diasDeDiferencia,
            "cedula" => $r->cedula_solicitante,
            "codigo" => $r->codigo,
            "empleado" => $empleado,
            "total_horas" => $r->total_horas,
            "tipo_enfermedad" => $r->tipo_enfermedad

        );
        $json_data = [
            "img" => $l,
            "datos" => $array
        ];
        //return $json_data;
        $html = view('Permisos.formatos.' . $r->sel_tipo_permiso, $json_data)->render();

        // Write some simple Content
        $document->WriteHTML($html);

        // Save PDF on your public storage 
        //Storage::disk('public')->put($documentFileName, $document->Output($documentFileName, "S"));

        $ftp = Storage::disk('ftp_movilidad')->put("/formularios/" . $documentFileName, $document->Output($documentFileName, "S"));
        return $ftp;
    }

    public function guardar_permiso_medico(Request $r)
    {
        $DDMMYYY_ = date('Ymd');
        $HMS = date('His');
        $cedula = $r->cedula_solicitante;
        $code = Str::upper(Str::random(6));
        $usuario = DB::select('select * from view_usuarios where emp_cedula = ? ', [$cedula]);
        $user = $usuario[0];
        $r->codigo = $code;
        $codigo = $this->generate_code_qr($r, $code, $cedula);

        if (!$codigo) {
            return response()->json(["respuesta" => false, "sms" => "Ocurrio un error al generar el código QR"]);
        }

        $email = Mail::to($user->correo, $user->emp_nombre . " " . $user->emp_apellido)->send(new EnviarCodeQr($code));

        $dele = DB::update('update tbl_codigos_permisos set estado=1 where id=?', [$codigo]);
        $documentFileName = $DDMMYYY_ . '_' . $HMS . '_' . $r->cedula_solicitante . "_firmado.pdf";

        $ftp = $this->save_file_pdf_formato_permiso($r, $documentFileName);
        if (!$ftp) {
            return response()->json(["respuesta" => false, "sms" => "Error al subir el archivo"]);
        }


        $r->url_formulario = $documentFileName;

        return $this->store($r);
    }


    public function verificar_feriado($fecha)
    {
        $fecha = DateTime::createFromFormat('Ymd',  $fecha);
        $registo_feriado = DB::select("SELECT * FROM tbl_feriados WHERE f_fecha = TO_DATE('{$fecha->format("d/m/Y")}', 'DD/MM/YYYY')");
        return $registo_feriado;
    }
}