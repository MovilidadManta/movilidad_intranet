<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class MedicoController extends Controller
{
    public function get_diagnostico_consulta_medicas($coincidenciaTotal,$limit, $text = '')
    {
        $text = str_replace("'", "\'", $text);
        if($coincidenciaTotal == 1){
            $coincidenciaTotal = '%';
        }else{
            $coincidenciaTotal = '';
        }
        $sql = DB::Select("select * from medico.view_tbl_diagnostico_consulta_medica WHERE upper(dm_descripcion) like E'" . trim($coincidenciaTotal) . strtoupper($text) ."%' OR upper(dm_cie10) like E'%" . strtoupper($text) ."%'  ORDER BY dm_orden desc, dm_cie10 " . ($limit == -1 ? "" : "LIMIT $limit"));

        $json_data = $sql;

        if ($json_data != "[]") {
            return response()->json(['data' => $json_data, 'respuesta' => true]);
        } else {
            return response()->json(['respuesta' => false]);
        }
    }
}
