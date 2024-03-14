<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\CicloController;
use App\Http\Controllers\AsignaturaController;
use App\Http\Controllers\EntregaController;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::middleware('auth')->group(function () {
    Route::get('/home', [CicloController::class, 'index'])->name('ciclos');
    Route::get('/ciclos/{ciclo}', [CicloController::class, 'show'])->name('ciclo.show');
    Route::get('/ciclos/{ciclo}/asignaturas', [AsignaturaController::class, 'asignaturasPorCiclo'])->name('asignaturas.por-ciclo');
    Route::get('/asignaturas/{id}', [AsignaturaController::class, 'show'])->name('asignatura.show');
    Route::get('/asignaturas/{id}/entregas', [EntregaController::class, 'index'])->name('entregas.index');
    Route::get('/entregas/{entrega}', [EntregaController::class, 'show'])->name('entrega.show');
    Route::post('/store', [App\Http\Controllers\FileController::class, 'store'])->name('files.store');
    Route::get('/index', [App\Http\Controllers\FileController::class, 'index'])->name('files.index');
    Route::delete('/destroy/{id}', [App\Http\Controllers\FileController::class, 'destroy'])->name('files.destroy');




});


