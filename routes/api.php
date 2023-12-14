<?php

use App\Http\Controllers\EquiposController;
use App\Http\Controllers\OperadorController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/operadores', [OperadorController::class, 'index']);
Route::post('/operadores', [OperadorController::class, 'store']);
Route::put('/operadores/{id}', [OperadorController::class, 'update']);
Route::delete('/operadores/{id}', [OperadorController::class, 'destroy']);

Route::get('/equipos', [EquiposController::class, 'index']);
Route::post('/equipos', [EquiposController::class, 'store']);
Route::put('/equipos/{id}', [EquiposController::class, 'update']);
Route::delete('/equipos/{id}', [EquiposController::class, 'destroy']);
