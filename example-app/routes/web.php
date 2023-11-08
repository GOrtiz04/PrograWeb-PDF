<?php

use App\Http\Controllers\ClienteController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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
Route::get('clientes/pdf', [ClienteController::class, 'pdf'])->name('cliente.pdf');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('areas', \App\Http\Controllers\AreaController::class);
Route::resource('equipos', \App\Http\Controllers\EquipoController::class);
Route::resource('incidentes', \App\Http\Controllers\IncidenteController::class);
Route::resource('clientes', \App\Http\Controllers\ClienteController::class);

