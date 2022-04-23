<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\inventario\CategoriaController;
use App\Http\Controllers\CitasMedicas\CitasController;

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

//Ventas

//Seguridad

//Empresa