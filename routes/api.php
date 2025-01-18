<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ModeloController;
use App\Http\Controllers\MotoController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\VentaController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Rutas para los modelos
Route::apiResource('modelos', ModeloController::class);

// Rutas para las motos
Route::apiResource('motos', MotoController::class);

// Rutas para los clientes
Route::apiResource('clientes', ClienteController::class);

// Rutas para las ventas
Route::apiResource('ventas', VentaController::class);

// Ruta para obtener el usuario autenticado (opcional, si usas Sanctum)
Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
