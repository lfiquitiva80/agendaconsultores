<?php

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


//COMANDOS ESPECIALES DE ARTISAN

Route::get('/clear-cache', function() {
    $exitCode = Artisan::call('cache:clear');
    return '<h1>Cache facade value cleared</h1>';
});
//Reoptimized class loader:
Route::get('/optimize', function() {
    $exitCode = Artisan::call('optimize');
    return '<h1>Reoptimized class loader</h1>';
});
//Route cache:
Route::get('/route-cache', function() {
    $exitCode = Artisan::call('route:cache');
    return '<h1>Routes cached</h1>';
});
//Clear Route cache:
Route::get('/route-clear', function() {
    $exitCode = Artisan::call('route:clear');
    return '<h1>Route cache cleared</h1>';
});
//Clear View cache:
Route::get('/view-clear', function() {
    $exitCode = Artisan::call('view:clear');
    return '<h1>View cache cleared</h1>';
});
//Clear Config cache:
Route::get('/config-cache', function() {
    $exitCode = Artisan::call('config:cache');
    return '<h1>Clear Config cleared</h1>';
});


Route::get('/', function () {
    return view('auth.login');
});




Route::group(['middleware' => 'auth'], function () {
    //    Route::get('/link1', function ()    {
//        // Uses Auth Middleware
//    });

    //Please do not remove this if you want adminlte:route and adminlte:link commands to works correctly.
    #adminlte_routes

Route::resource('clientes','clientesController');
Route::resource('dashboard','dashboardController');
Route::resource('actividad','actividadController');
Route::resource('calendario_tributario','calendario_tributarioController');
Route::resource('cargo','cargoController');
Route::resource('citas','citasController');
Route::resource('compromisos','compromisosController');
Route::resource('compromisoscliente','compromisosclientesController');
//Route::resource('conf_dev_iva','conf_dev_ivaController');
//Route::resource('conf_imp_ica','conf_imp_icaController');
//Route::resource('conf_imp_iva','conf_imp_ivaController');
//Route::resource('conf_imp_renta','conf_imp_rentaController');
//Route::resource('conf_imp_reteica','conf_imp_reteicaController');
//Route::resource('conf_imp_retencion','conf_imp_retencionController');
//Route::resource('conf_informe','conf_informeController');
Route::resource('detalle_dev_iva','detalle_dev_ivaController');
Route::resource('detalle_imp_ica','detalle_imp_icaController');
Route::resource('detalle_imp_iva','detalle_imp_ivaController');
Route::resource('detalle_imp_renta','detalle_imp_rentaController');
Route::resource('detalle_imp_reteica','detalle_imp_reteicaController');
Route::resource('detalle_imp_retencion','detalle_imp_retencionController');
Route::resource('detalle_informe','detalle_informeController');
Route::resource('encabezado_dev_iva','encabezado_dev_ivaController');
Route::resource('encabezado_imp_ica','encabezado_imp_icaController');
Route::resource('encabezado_imp_iva','encabezado_imp_ivaController');
Route::resource('encabezado_imp_renta','encabezado_imp_rentaController');
Route::resource('encabezado_imp_reteica','encabezado_imp_reteicaController');
Route::resource('encabezado_imp_retencion','encabezado_imp_retencionController');
Route::resource('encabezado_informe','encabezado_informeController');
Route::resource('plantilla_checklist','plantilla_checklistController');
Route::resource('pago_cliente','pago_clienteController');
Route::resource('estado_cita','estado_citaController');
Route::resource('lugar','lugarController');
Route::resource('migrations','migrationsController');
Route::resource('perfil','perfilController');
Route::resource('periodo','periodoController');
Route::resource('usuario','usuarioController');
Route::resource('checklist','checklistController');
Route::resource('panel','panelController');
Route::resource('tipo_actividad','tipo_actividadController');
Route::resource('actividad_cargo','actividad_cargoController');
Route::resource('empresa','empresaController');

Route::get('citas_agenda','citasController@get_events')->name('citas_agenda');
Route::get('citas_all','citasController@citasall')->name('citas_all');
Route::get('actavisita/{id}','citasController@actavisitas')->name('actavisita');
Route::get('comproclientesall','compromisosclientesController@compclientesall')->name('compromisosclienteall');
Route::get('agendaconsultor','HomeController@agendaconsultor')->name('agendaconsultor');
Route::get('adminitradordearchivos','HomeController@adminitradordearchivos')->name('adminitradordearchivos');
Route::get('iniciosesion', 'HomeController@info')->name('iniciosesion');
Route::post('savesesion', 'citasController@sesion')->name('sesiones');
Route::get('/home', 'HomeController@index')->name('home');
Route::any('/user/profile', 'usuarioController@profile')->name('profile');




//log del sistema
Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');
Route::get('usuariosexcel','usuarioController@export')->name('usuarioexcel');
//Exceles
Route::get('citasExports','excelController@citasExports')->name('citasExports');
Route::get('actividadExports','excelController@actividad')->name('actividadExports');
Route::get('actividad_cargoExports','excelController@actividad_cargo')->name('actividad_cargoExports');
Route::get('calendario_tributarioExports','excelController@calendario_tributario')->name('calendario_tributarioExports');
Route::get('cargoExports','excelController@cargo')->name('cargoExports');
Route::get('checklistExports','excelController@checklist')->name('checklistExports');
Route::get('clienteExports','excelController@cliente')->name('clienteExports');
Route::get('compromisosExports','excelController@compromisos')->name('compromisosExports');
Route::get('compromisos_clienteExports','excelController@compromisos_cliente')->name('compromisos_clienteExports');
Route::get('detalle_dev_ivaExports','excelController@detalle_dev_iva')->name('detalle_dev_ivaExports');
Route::get('detalle_imp_icaExports','excelController@detalle_imp_ica')->name('detalle_imp_icaExports');
Route::get('detalle_imp_ivaExports','excelController@detalle_imp_iva')->name('detalle_imp_ivaExports');
Route::get('detalle_imp_rentaExports','excelController@detalle_imp_renta')->name('detalle_imp_rentaExports');
Route::get('detalle_imp_reteicaExports','excelController@detalle_imp_reteica')->name('detalle_imp_reteicaExports');
Route::get('detalle_imp_retencionExports','excelController@detalle_imp_retencion')->name('detalle_imp_retencionExports');
Route::get('detalle_informeExports','excelController@detalle_informe')->name('detalle_informeExports');
Route::get('empresaExports','excelController@empresa')->name('empresaExports');
Route::get('encabezado_dev_ivaExports','excelController@encabezado_dev_iva')->name('encabezado_dev_ivaExports');
Route::get('encabezado_imp_icaExports','excelController@encabezado_imp_ica')->name('encabezado_imp_icaExports');
Route::get('encabezado_imp_ivaExports','excelController@encabezado_imp_iva')->name('encabezado_imp_ivaExports');
Route::get('encabezado_imp_rentaExports','excelController@encabezado_imp_renta')->name('encabezado_imp_rentaExports');
Route::get('encabezado_imp_reteicaExports','excelController@encabezado_imp_reteica')->name('encabezado_imp_reteicaExports');
Route::get('encabezado_imp_retencionExports','excelController@encabezado_imp_retencion')->name('encabezado_imp_retencionExports');
Route::get('encabezado_informeExports','excelController@encabezado_informe')->name('encabezado_informeExports');
Route::get('estado_citaExports','excelController@estado_cita')->name('estado_citaExports');
Route::get('jornadaExports','excelController@jornada')->name('jornadaExports');
Route::get('lugarExports','excelController@lugar')->name('lugarExports');
Route::get('pago_clienteExports','excelController@pago_cliente')->name('pago_clienteExports');
Route::get('perfilExports','excelController@perfil')->name('perfilExports');
Route::get('periodoExports','excelController@periodo')->name('periodoExports');
Route::get('plantilla_checklistExports','excelController@plantilla_checklist')->name('plantilla_checklistExports');
Route::get('tipo_actividadExports','excelController@tipo_actividad')->name('tipo_actividadExports');



});
