<?php

use App\Http\Controllers\MedicoController;
use App\Http\Controllers\PruebaController;
use App\Http\Controllers\MarcacionesEmpleadoRemotoController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::GET('/', 'App\Http\Controllers\LoginController@index');
Route::GET('/home', 'App\Http\Controllers\HomeController@index');

//LOGIN
Route::POST('/iniciar-sesion', 'App\Http\Controllers\LoginController@iniciar_sesion')->middleware('throttle:10,1');
Route::GET('/cerrar-sesion', 'App\Http\Controllers\LoginController@cerrar_sesion');
Route::get('reset-password', 'App\Http\Controllers\LoginController@reset');
Route::post('cambiar_pass', 'App\Http\Controllers\LoginController@cambiar');

//EVALUACION DE DESEMPEÑO
Route::GET('/evaluacion-empleado', 'App\Http\Controllers\EvaluacionController@index');
Route::GET('/evaluar-empleado/{id}', 'App\Http\Controllers\EvaluacionController@pregunta_evaluacion_id');
Route::GET('/get-empleado-id/{id}', 'App\Http\Controllers\EvaluacionController@get_preguntas_evaluacion');
Route::POST('/registrar-evaluacion', 'App\Http\Controllers\EvaluacionController@save_evaluacion');

//CUMPLEAÑOS
Route::get('cumpleaños', 'App\Http\Controllers\CumpleaniosController@index');
Route::get('cumpleanio', 'App\Http\Controllers\CumpleaniosController@create');

Route::post('send_mensaje', 'App\Http\Controllers\CumpleaniosController@store');
Route::get('get_mensaje', 'App\Http\Controllers\CumpleaniosController@GET_mensajes');
Route::get('Get_notificaciones/{id}', 'App\Http\Controllers\CumpleaniosController@GET_contenido');
Route::get('desactivar_notificacion/{id}', 'App\Http\Controllers\CumpleaniosController@GETdesactivarNot');

//eventos
Route::get('events', 'App\Http\Controllers\EventosController@index');
Route::get('eventos_calendario', 'App\Http\Controllers\EventosController@get_eventos');


//AGENDA
Route::get('extensiones', 'App\Http\Controllers\ExtensionesController@index');

//NORMATIVAS
Route::GET('/normativa', 'App\Http\Controllers\NormativaController@index');

//VALORES
Route::GET('/valore', 'App\Http\Controllers\ValoreController@index');

/*DOCUMENTOS*/
Route::get('docs/{folder}', 'App\Http\Controllers\DocumentosController@index');
Route::get('descargar_archivo/{ruta}', 'App\Http\Controllers\DocumentosController@descargar_archivo');
Route::get('descargar_file/{ruta}', 'App\Http\Controllers\DocumentosController@descargar_file_chat');
Route::post('directorio', 'App\Http\Controllers\DocumentosController@getCarpetas');
Route::get('getFolder', 'App\Http\Controllers\DocumentosController@getFolder');
Route::get('/accionPersonal', 'App\Http\Controllers\DocumentosController@generate_pdf_accion_personal');


/*PERMISOS */
Route::get('/permisos_online', 'App\Http\Controllers\PermisosController@index');
Route::get('/permisos_online_prueba', 'App\Http\Controllers\PermisosController@index_prueba');
Route::get('/permisos_online/verificar_feriado/{fecha}', 'App\Http\Controllers\PermisosController@verificar_feriado');
Route::post('guardar_solicitud', 'App\Http\Controllers\PermisosController@store');
Route::get('view/permisos', 'App\Http\Controllers\PermisosController@create');
Route::get('descargar_archivo_per/{ruta}', 'App\Http\Controllers\PermisosController@descargar_archivo');
Route::post('permisos_estado', 'App\Http\Controllers\PermisosController@estado_permiso');
Route::get('get_permisos', 'App\Http\Controllers\PermisosController@get_permisos');
Route::get('permisos', 'App\Http\Controllers\PermisosController@permisos');
Route::get('reporte-solicitude', 'App\Http\Controllers\PermisosController@create_reporte_solicitudes');
Route::get('get-reporte-permiso/{fech_ini}/{fech_fin}', 'App\Http\Controllers\PermisosController@get_reporte_permisos');
Route::get('/imprimir-pdf-reporte-permiso/{fech_ini}/{fech_fin}', 'App\Http\Controllers\PermisosController@get_reporte_permisos_pdf');
Route::GET('/imprimir-excel-reporte-permiso/{fech_ini}/{fech_fin}', 'App\Http\Controllers\PermisosController@get_reporte_permisos_excell');

Route::get('showpermiso', 'App\Http\Controllers\PermisosController@view_permiso');
Route::get('preview-permiso', 'App\Http\Controllers\PermisosController@v_permiso');
Route::post('vista_previa', 'App\Http\Controllers\PermisosController@vista_previa_documento');
Route::post('enviar_code_qr', 'App\Http\Controllers\PermisosController@enviar_code_qr');
//Route::get('enviar_code_qr', 'App\Http\Controllers\PermisosController@enviar_code_qr');
Route::post('estampar_codigo', 'App\Http\Controllers\PermisosController@estampar_codigo');
Route::get('firmar_jefe', 'App\Http\Controllers\PermisosController@firmar_jefe');
Route::post('enviar_codigo', 'App\Http\Controllers\PermisosController@enviar_codigo');
Route::post('estampar_codigo_jefe', 'App\Http\Controllers\PermisosController@estampar_codigo_jefe');
Route::post('/enviar_permiso_medico', 'App\Http\Controllers\PermisosController@guardar_permiso_medico');


/*MIS VACACIONES*/
Route::get('vacaciones', 'App\Http\Controllers\PermisosController@vacaciones');

/**ASIGNAR MENUS DEFAUL**/
Route::get('asignar_menu', 'App\Http\Controllers\HomeController@asignar');

/*Usuarios*/
Route::get('correo-usuario', 'App\Http\Controllers\UsuarioControllers@index');

/* Medico */
Route::get('/get_search_diagnostico_consulta_medica/{coincidenciaTotal}/{limit}/{text?}', [MedicoController::class, 'get_diagnostico_consulta_medicas']);


//Prueba 
Route::get('/prueba_permiso', [PruebaController::class, 'index']);

Route::prefix('orden_cuerpo')->group(function (){
    Route::GET('/', 'App\Http\Controllers\AgenteTransitoController@GetDocumentosGenerados');
});

Route::prefix('formularios')->group(function (){
    Route::GET('/', 'App\Http\Controllers\CuestionariosController@viewformulario');
    Route::GET('/get_pdf_calificacion/{ficha_id}', 'App\Http\Controllers\CuestionariosController@get_pdf_calificacion');
    Route::GET('/get_pregunta_ad/{id}', 'App\Http\Controllers\CuestionariosController@get_pregunta');
    Route::GET('/get_ficha/{id}', 'App\Http\Controllers\CuestionariosController@get_formulario_user');
    Route::GET('/{id}', 'App\Http\Controllers\CuestionariosController@formulario');
    Route::POST('store_ficha', 'App\Http\Controllers\CuestionariosController@store_ficha');
    Route::POST('store_pre_ficha', 'App\Http\Controllers\CuestionariosController@store_pre_ficha');
});

Route::prefix('marcaciones_empleado')->group(function (){
    Route::POST('guardar', 'App\Http\Controllers\MarcacionesEmpleadoRemotoController@store');
    Route::GET('/get_last_marcacion', 'App\Http\Controllers\MarcacionesEmpleadoRemotoController@get_last_marcacion_day');
    Route::GET('/get_imagen/{archivo}', 'App\Http\Controllers\MarcacionesEmpleadoRemotoController@descargar_evidencias_marcacion');
    Route::GET('/get_marcaciones/{fecha_inicio}/{fecha_fin}', 'App\Http\Controllers\MarcacionesEmpleadoRemotoController@get_marcaciones_empleado');
});


