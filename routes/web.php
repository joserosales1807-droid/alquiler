<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\AlquilerController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\DetalleAlquilerController;
use App\Http\Controllers\EquipoController;
Route::get('/', function () {
    return view('welcome');
});

Route::get('/categorias', [CategoriaController::class, 'index']);
route::get('/categorias/{id}/equipo', [CategoriaController::class, 'equipo']);
Route::get('/equipos', [EquipoController::class, 'index']);
route::get('/equipos/{id}/categoria', [EquipoController::class, 'categoria']);
route::get('/equipos/categoria/{categoria}', [EquipoController::class, 'Oncategoria']);
Route::get('/clientes', [ClienteController::class, 'index']);
route::get('/clientes/{id}/alquiler', [ClienteController::class, 'alquiler']);
Route::get('/empleados', [EmpleadoController::class, 'index']);
route::get('/empleados/{id}/alquiler', [EmpleadoController::class, 'alquiler']);
Route::get('/alquileres', [AlquilerController::class, 'index']);
route::get('/alquileres/completo', [AlquilerController::class, 'completo']);
route::get('/alquileres/{id}/detalles', [AlquilerController::class, 'detalles']);
Route::get('/detalleAlquileres', [DetalleAlquilerController::class, 'index']);
route::get('/detalleAlquileres/{id}/relaciones', [DetalleAlquilerController::class, 'relaciones']);