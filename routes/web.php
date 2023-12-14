<?php

use App\Http\Controllers\EquiposController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/equipos', [EquiposController::class, 'index'])->name('equipos.index');
Route::get('/equipos/{equipo}/edit', [EquiposController::class, 'edit'])->name('equipos.edit');
Route::put('/equipos/{equipo}', [EquiposController::class, 'update'])->name('equipos.update');

// Ruta para mostrar la vista de agregar equipo
Route::get('/equipos/create', [EquiposController::class, 'create'])->name('equipos.create');

// Ruta para procesar el formulario de agregar equipo
Route::post('/equipos', [EquiposController::class, 'store'])->name('equipos.store');

