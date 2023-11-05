<?php

use App\Http\Controllers\CursoController;
use App\Http\Controllers\ProfesorController;
use App\Http\Controllers\SuscripcionController;
use App\Http\Controllers\UsuarioController;
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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('curso/compra', [CursoController::class, 'formularioCompra']);
Route::post('curso/compra', [CursoController::class, 'guardarCompra']);

Route::get('suscripcion/compra', [SuscripcionController::class, 'formularioSuscripcion']);
Route::get('suscripcion/compra', [SuscripcionController::class, 'formularioSuscripcion']);

Route::get('usuario/mostrar', [UsuarioController::class, 'mostrarUsuario']);
Route::get('profesor/mostrar', [ProfesorController::class, 'mostrarProfesor']);
Route::get('profesor/iniciar', [ProfesorController::class, 'profesorClase']);