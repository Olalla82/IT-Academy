<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\apiController;
use App\Http\Controllers\PaisController;
use App\Http\Controllers\DepartamentoController;


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

Route::get('/', homeController::class);

Route::get('api/user', apiController::class);

Route::get('token', [PaisController::class, 'token'])->name('token');

Route::get('paises', [PaisController::class, 'index']);

Route::post('paises/{pais}', [PaisController::class, 'store']);

Route::get('paises/{pais}', [PaisController::class, 'show']);

Route::put('paises/{pais}', [PaisController::class, 'update']);

Route::delete('paises/{pais}', [PaisController::class, 'destroy']);

Route::get('token', [DepartamentoController::class, 'token'])->name('token');

Route::get('paises/{pais}/departamentos', [DepartamentoController::class, 'index']);

Route::post('paises/{pais}/departamentos', [DepartamentoController::class, 'store']);

Route::get('paises/{pais}/departamentos/{departamento}', [DepartamentoController::class, 'show']);

Route::put('paises/{pais}/departamentos/{departamento}', [DepartamentoController::class, 'update']);

Route::delete('paises/{pais}/departamentos/{departamento}', [DepartamentoController::class, 'destroy']);