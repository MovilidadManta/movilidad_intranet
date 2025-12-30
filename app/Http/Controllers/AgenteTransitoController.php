<?php

namespace App\Http\Controllers;

use DB;
use Session;
use Storage;

use Carbon\Carbon;
use Mpdf\Mpdf;

class AgenteTransitoController extends Controller
{
    public function GetDocumentosGenerados()
    {
        if (Session::get('usuario')) {
            $cl = new HomeController();
            $menus_ = $cl->GET_menus_asign();
            $cumples = $cl->GET_Cumpleaños();
            $eventos = $cl->GET_events();
            $id_empleado = Session::get('id_empleado');
            $fecha = DB::select('select emp_fecha_nacimiento AS fecha from tbl_empleados where emp_id = ?', [$id_empleado]);
            $documents = DB::Select("SELECT a.emp_id, e.id_primary, e.id_related, e.e_fecha_update::date as e_fecha_update, o.oc_datos FROM public.tbl_send_emails AS e INNER JOIN public.tbl_cod_agentes_transito AS a ON e.id_related = a.at_id INNER JOIN public.tbl_plan_orden_cuerpo AS o ON e.id_primary = o.oc_id WHERE e_table_string = 'ORDEN_CUERPO' AND a.emp_id = $id_empleado ORDER BY e.e_fecha_update DESC LIMIT 30");
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

            foreach ($documents as $d) {
                // Decodificar el JSON
                $ordenjson = json_decode($d->oc_datos, true);

                // Buscar el objeto con el nombre "title_document"
                $titulo = "";
                foreach ($ordenjson as $oj) {
                    if ($oj['name'] === 'title_document') {
                        $titulo = $oj['text'];
                        break;
                    }
                }

                $d->titulo = $titulo;
            }

            return view('AgenteTransito.list_documents', compact('menus_', 'cumples', 'isCumple', 'eventos', 'documents'));

        }else {
            return view("Login.login");
        }
    }
}