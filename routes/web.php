<?php

use Illuminate\Support\Facades\Route;
//agregamos los controladores


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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('crearContactos', App\Http\Controllers\CreaContactoController::class);
Route::resource('contactos', App\Http\Controllers\ContactoController::class);
Route::resource('nosotros', App\Http\Controllers\NosotrosController::class);
Route::resource('datos', App\Http\Controllers\DatoController::class);


