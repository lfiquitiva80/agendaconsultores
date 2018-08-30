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
    return view('welcome');
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
Route::resource('conf_dev_iva','conf_dev_ivaController');
Route::resource('conf_imp_ica','conf_imp_icaController');
Route::resource('conf_imp_iva','conf_imp_ivaController');
Route::resource('conf_imp_renta','conf_imp_rentaController');
Route::resource('conf_imp_reteica','conf_imp_reteicaController');
Route::resource('conf_imp_retencion','conf_imp_retencionController');
Route::resource('conf_informe','conf_informeController');
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
Route::resource('estado_cita','estado_citaController');
Route::resource('lugar','lugarController');
Route::resource('migrations','migrationsController');
Route::resource('perfil','perfilController');
Route::resource('periodo','periodoController');
Route::resource('usuario','usuarioController');

Route::get('citas_agenda','citasController@get_events')->name('citas_agenda');
Route::get('citas_all','citasController@citasall')->name('citas_all');



//log del sistema
Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');
Route::get('usuariosexcel','usuarioController@export')->name('usuarioexcel');


});
