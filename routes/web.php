<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FotosController;
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

Auth::routes();

Route::get('/Evento', [App\Http\Controllers\EventosController::class, 'index'])->name('home');
// iba con get
Route::post('/mostrar', [App\Http\Controllers\EventosController::class, 'show'])->name('show');

Route::post('/agregar', [App\Http\Controllers\EventosController::class, 'store'])->name('store');

Route::post('/editar/{id}', [App\Http\Controllers\EventosController::class, 'edit'])->name('edit');

Route::post('/borrar/{id}', [App\Http\Controllers\EventosController::class, 'destroy'])->name('destroy');

Route::post('/actualizar/{evento}', [App\Http\Controllers\EventosController::class, 'update'])->name('update');

Route::get('/', [FotosController::class, 'index']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/welcome', [App\Http\Controllers\HomeController::class, 'WelcomeIndex'])->name('welcome');