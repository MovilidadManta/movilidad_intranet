<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\HomeController;

use Mpdf\Mpdf;
use DB;

use  Session;
use Storage;




class DocumentosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($folder)
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

            $direc = Storage::disk('ftp_movilidad_principal')->Directories("/ftpintranet/" . $folder);
            $files = Storage::disk('ftp_movilidad_principal')->files("/ftpintranet/" . $folder);
            //return $direc;
            $folder_ = array_merge($direc, $files);
            //return $folder_;
            return view('Documentos.index', compact('menus_', 'cumples', 'isCumple', 'eventos', 'folder', 'folder_'));
        } else {
            return view("Login.login");
        }
    }

    public function descargar_archivo($ruta)
    {
        $ruta = base64_decode($ruta);
        $ruta = trim($ruta, '"');
        //return utf8_decode($ruta);
        return Storage::disk('ftp_movilidad_principal')->download($ruta);
    }

    public function descargar_file_chat($id)
    {
        $file = DB::select('select me_file,me_fname,me_ftipo from tbl_intra_mensaje where men_id = ?', [$id]);
        $fileURL_ = explode(";", $file[0]->me_file);
        $fileURL_ = substr($fileURL_[1], 7);
        $ifp = fopen($file[0]->me_fname, 'wb');
        fwrite($ifp, base64_decode($fileURL_));
        fclose($ifp);
        $size = filesize($file[0]->me_fname);
        header("Content-Type: application/force-download");
        header("Content-Disposition: attachment; filename=" . $file[0]->me_fname);
        header("Content-Transfer-Encoding: binary");
        header("Content-Length: $size");
        readfile($file[0]->me_fname);
        return "";
    }

    public function getCarpetas(Request $r)
    {
        $direc = Storage::disk('ftp_movilidad_principal')->Directories("/ftpintranet/" . $r->carpeta);
        $files = Storage::disk('ftp_movilidad_principal')->files("/ftpintranet/" . $r->carpeta);
        $folder = array_merge($direc, $files);
        return $folder;
    }

    public function getFolder()
    {
        $direc = Storage::disk('ftp_movilidad_principal')->Directories("/ftpintranet/");
        $files = Storage::disk('ftp_movilidad_principal')->files("/ftpintranet/");
        $folder = array_merge($direc, $files);
        return $folder;
    }

    public function generate_pdf_accion_personal()
    {
        //return view("Documentos.reporte_accion_personal");
        
        $html = view('Documentos.reporte_accion_personal', 
        [])->render();
        $namefile = 'Accion_personal.pdf';
        $defaultConfig = (new \Mpdf\Config\ConfigVariables())->getDefaults();
        $fontDirs = $defaultConfig['fontDir'];
        $defaultFontConfig = (new \Mpdf\Config\FontVariables())->getDefaults();
        $fontData = $defaultFontConfig['fontdata'];
        $mpdf = new Mpdf([
            'fontDir' => array_merge($fontDirs, [
                public_path() . '/fonts',
            ]),
            'fontdata' => $fontData + [
                'arial' => [
                    'R' => 'arial.ttf',
                    'B' => 'arialbd.ttf',
                ],
            ],
            'default_font' => 'arial',
            'orientation' => 'P'
        ]);
        $mpdf->SetDisplayMode('fullwidth');
        $mpdf->WriteHTML($html);
        $mpdf->debug = true;
        $mpdf->showImageErrors = true;
        $mpdf->Output($namefile, "I");
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
