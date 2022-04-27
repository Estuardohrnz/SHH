<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\inventario\CategoriaController;
use App\Http\Controllers\CitasMedicas\CitasController;
<<<<<<< HEAD
use App\Http\Controllers\Seguridad\Permisos\PermisosController;
use App\Http\Controllers\Seguridad\Roles\RolesController;

=======
use App\Http\Controllers\ReportesEstadisticas\ReportesController;
>>>>>>> 3f08ff4bc6335c97d88c7869b15a9f860ea95502
Route::get('/', function () {
    return view('welcome');
});



Route::resource("/categorias", CategoriaController::class);

//CitasMedicas
Route::resource("/citas", CitasController::class);
//Compras

//ExpedientesMedicos

//Inventarios

//NotasAudios

//Personas

//ReportesEstadisticas
//Route::resource("/reportes", ReportesController::class);
Route::get('/reportes', "App\Http\Controllers\ReportesEstadisticas\Reportes\ReportesController@index");

Route::post('/reportes_store', "App\Http\Controllers\ReportesEstadisticas\Reportes\ReportesController@store")->name('reportes.store');

//Ruta que sirve para visualizar el reporte de citas en el navegador en formato pdf
Route::get('/VerPdf_cita', "App\Http\Controllers\ReportesEstadisticas\Reportes\ReportesController@VerPdf_cita")->name('VerPdf.Citas');
//Ventas

//Seguridad
Route::resource("/permisos", PermisosController::class);
Route::resource("/roles", RolesController::class);
//Empresa