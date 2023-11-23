<?php

use Illuminate\Support\Facades\Route;

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

Route::resource('empleado', 'App\Http\Controllers\empleadoController');

Route::resource('cliente', 'App\Http\Controllers\clienteController');

Route::resource('producto', 'App\Http\Controllers\productoController');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('ventas', 'App\Http\Controllers\VentaController');