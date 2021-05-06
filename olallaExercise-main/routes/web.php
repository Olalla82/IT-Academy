<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Http\Controllers\homeController;
use App\Http\Controllers\authController;
use App\Http\Controllers\catalogController;
use App\Http\Controllers\timeController;
use App\Http\Controllers\sesionController;
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

Route::get('/', [homeController::class, 'index']);


Route::get('token', [authController::class, 'token'])->name('token');

Route::get('login', [authController::class, 'login']);//post


Route::get('logout', function(){
    return "Logout Usuari";
});



Route::get('catalog', [catalogController::class, 'index']);

Route::get('catalog/show/{id}', [catalogController::class, 'show'])->name('catalog.show');

Route::post('catalog/create', [catalogController::class, 'create'])->name('catalog.create');

Route::get('catalog/edit/{id}', [catalogController::class, 'edit'])->name('catalog.edit');

Route::put('catalog/edit', [catalogController::class, 'edit_update'])->name('catalog.update');

Route::get('sesion', [sesionController::class, 'index']);

Route::post('sesion/inicio', [sesionController::class, 'send'])->name('sesion.inicio');

Route::get('sesion/registro', [sesionController::class, 'create']);

Route::post('sesion/rg', [sesionController::class, 'incluir'])->name('sesion.registro');

Route::get('sesion/password', [sesionController::class, 'update']);

Route::post('sesion/pssw', [sesionController::class, 'restaurar'])->name('sesion.password');

Route::get('error', function(){
    return response('ESTO ES UN ERROR', 404);
});

Route::get('test', function(){
    return "Has accedido correctamente a esta ruta";
})->middleware('time');

Route::get('time', timeController::class);



  
