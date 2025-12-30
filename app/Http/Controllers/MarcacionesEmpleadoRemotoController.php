<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;
use DateTime;
use File;
use Storage;
use Carbon\Carbon;

class MarcacionesEmpleadoRemotoController extends Controller
{

    public function get_marcaciones_empleado($fecha_inicio, $fecha_fin)
    {
        $where = "";

        $fecha_inicio = DateTime::createFromFormat('Ymd',  $fecha_inicio);
        $where .= " me_fecha_marcacion::date >= TO_DATE('{$fecha_inicio->format("d/m/Y")}', 'DD/MM/YYYY') AND ";
        $fecha_fin = DateTime::createFromFormat('Ymd',  $fecha_fin);
        $where .= "me_fecha_marcacion::date <= TO_DATE('{$fecha_fin->format("d/m/Y")}', 'DD/MM/YYYY')";

        $emp_id = session::get('id_empleado');
        $sql = "SELECT me_fecha_marcacion, me_tipo_marcacion, me_ip, me_archivo_evidencia_marca 
        FROM tbl_marcacion_empleado_remoto 
        WHERE {$where} AND emp_id = {$emp_id}
        ORDER BY me_fecha_marcacion";

        $list = DB::Select($sql);

        DB::disconnect();
        return $list;
    }

    public function get_last_marcacion_day()
    {
        $emp_id = session::get('id_empleado');
        $sql = "SELECT me_tipo_marcacion FROM tbl_marcacion_empleado_remoto
        WHERE emp_id = {$emp_id} and me_fecha_marcacion::date = NOW()::date
        ORDER BY me_tipo_marcacion DESC LIMIT 1";

        $last = DB::Select($sql);
        DB::disconnect();
        $num_marcacion = 1;
        if(count($last) > 0){
            $num_marcacion = $last[0]->me_tipo_marcacion + 1;
            if($num_marcacion > 4){
                $num_marcacion = 4;
            }
        }

        return $num_marcacion;
    }

    public function store(Request $request)
    {
        $date = Carbon::now();
        $ip = $request->header('X-Forwarded-For') ?? $request->ip();
        $user = session::get('id_users');
        $cer_id = session::get('cer_id');
        $emp_id = session::get('id_empleado');

        \Log::info('ip_debug', [
            'laravel_ip' => $request->ip(),
            'xff'        => $request->header('X-Forwarded-For'),
            'xri'        => $request->header('X-Real-IP'),
            'cf'         => $request->header('CF-Connecting-IP'),
            'all'        => $request->headers->all(),
            ]);

        $sql = "SELECT FLOOR(EXTRACT(EPOCH FROM (NOW() - me_fecha_marcacion)) / 60) AS minutos_diferencia FROM tbl_marcacion_empleado_remoto
        WHERE emp_id = {$emp_id} and me_fecha_marcacion::date = NOW()::date
        ORDER BY me_fecha_marcacion DESC LIMIT 1";

        $last = DB::Select($sql);
        DB::disconnect();
        if(count($last) > 0 && $last[0]->minutos_diferencia < 5){
            return response()->json(["respuesta" => "false", "cod"=>"NOT_ENOUGH_TIME"]);
        }


        $me_tipo_marcacion = $request->input('me_tipo_marcacion');
        $base64 = $request->input('foto_empleado');
        $base64 = preg_replace('#^data:image/\w+;base64,#i', '', $base64);
        $imagen = base64_decode($base64);

        $json[] = [
            'cer_id' => $cer_id,
            'emp_id' => $emp_id,
            'me_tipo_marcacion' => $me_tipo_marcacion,
            'me_ip' => $ip
        ];

        $jsoninsert = json_encode($json);
        $sql = DB::Select('select public.procedimiento_registrar_tbl_marcacion_empleado_remoto(?,?,?)', [$jsoninsert, $ip, $user]);
        DB::disconnect();
        foreach ($sql as $s) {
            $id = $s->procedimiento_registrar_tbl_marcacion_empleado_remoto;
        }
        if ($sql != "[]") {
            $nombrearchivo = "foto_{$id}_{$emp_id}.jpeg";
            $nuevaruta = public_path('/fotos_marcaciones_empleados/' . $nombrearchivo);

             // --- Crear imagen GD desde el binario base64 ---
            $imgGD = imagecreatefromstring($imagen);
            if ($imgGD === false) {
                return response()->json(['respuesta' => "false", 'error' => 'Error creando imagen']);
            }

            $fecha_bd = DB::Select('SELECT * FROM public.tbl_marcacion_empleado_remoto WHERE me_id=?', [$id]);
            $fechaTexto = $fecha_bd[0]->me_fecha_marcacion ?? now()->toDateTimeString();

            // Configurar color y fuente
            $color = imagecolorallocate($imgGD, 255, 255, 255); // blanco
            $font = 5; // fuente interna de GD
            $x = 10;
            $h = imagesy($imgGD);

            // Primera línea: fecha (abajo del todo)
            imagestring($imgGD, $font, $x, $h - 30, "Fecha: " . $fechaTexto, $color);

            // Segunda línea: IP (un poquito más arriba)
            imagestring($imgGD, $font, $x, $h - 15, "IP: " . $ip, $color);

            // Guardar en ruta
            imagejpeg($imgGD, $nuevaruta, 90);
            imagedestroy($imgGD);

            Storage::disk('ftp_movilidad_principal')->put('/ftpEvidenciaEmpleadosRemoto/' . $nombrearchivo, File::get($nuevaruta));
           
            if (file_exists($nuevaruta)) {
                unlink($nuevaruta);
            }

            $fecha_bd[0]->me_fecha_marcacion; // aqui implementacion de agregar en la foto fecha

            $json_archivo[] = [
                'me_id' => $id,
                'me_archivo_evidencia_marca' => $nombrearchivo
            ];
            $jsoninsert_archivo = json_encode($json_archivo);
             $sql = DB::Select('select public.procedimiento_actualizar_foto_tbl_marcacion_empleado_remoto(?,?,?)', [$jsoninsert_archivo, $ip, $user]);
            DB::disconnect();
            return response()->json(['respuesta' => "true", "data" => $id, "sql" => $sql]);
        } else {
            return response()->json(["respuesta" => "false"]);
        }
    }

    public function descargar_evidencias_marcacion($archivo)
    {
        // Limpia comillas dobles si existen
        $archivo = trim($archivo, '"');

        $ruta = '/ftpEvidenciaEmpleadosRemoto/' . $archivo;

        if (!Storage::disk('ftp_movilidad_principal')->exists($ruta)) {
            return response()->json(['error' => 'Archivo no encontrado'], 404);
        }

        $contenido = Storage::disk('ftp_movilidad_principal')->get($ruta);
        $mime = Storage::disk('ftp_movilidad_principal')->mimeType($ruta) ?? 'application/octet-stream';

        return response($contenido, 200)->header('Content-Type', $mime);
    }
}