<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\sesionController;
use App\Http\Controllers\empleadosController;



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
//USER ROUTE
Route::get('/', [sesionController::class, 'login'])->name('sesion.login');

Route::post('store', [sesionController::class, 'store'])->name('sesion.store');

Route::get('registro', [sesionController::class, 'registro'])->name('registro');

Route::post('registro', [sesionController::class, 'registro_store'])->name('sesion.registro.store');

Route::get('password', [sesionController::class, 'pssw'])->name('password');

Route::post('password', [sesionController::class, 'password'])->name('password.post');


//EMPLEADOS ROUTE

Route::get('token', [empleadosController::class, 'token'])->name('token');

Route::get('home', [empleadosController::class, 'index'])->name('empleado.index');

Route::get('create', [empleadosController::class, 'create'])->name('empleado.create');

Route::post('create', [empleadosController::class, 'envio'])->name('empleado.envio');

Route::get('read', [empleadosController::class, 'show'])->name('empleado.show');

Route::get('update', [empleadosController::class, 'vista_update']);

Route::put('update', [empleadosController::class, 'update'])->name('empleado.update');

Route::get('delete', [empleadosController::class, 'delete']);
    
Route::delete('delete', [empleadosController::class, 'delete'])->name('empleado.delete');


Route::get('error', function(){
    return response('PAGINA NO ENCONTRADA - ERROR 404', 404);
});
