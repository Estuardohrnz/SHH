<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\inventario\CategoriaController;

Route::get('/', function () {
    return view('welcome');
});



Route::resource("/categorias", CategoriaController::class);

//CitasMedicas

//Compras

//ExpedientesMedicos

//Inventarios

//NotasAudios

//Personas

//ReportesEstadisticas

//Ventas

//Seguridad

//Empresa
