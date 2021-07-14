<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PassportController;
use App\Http\Controllers\TiendaController;
use App\Http\Controllers\CuadrosController;

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

Route::get('cuadros', [HomeController::class, 'index'])->name('home');

Route::get('/', [HomeController::class, 'show'])->name('cuadros');

Route::get('tiendas', [HomeController::class, 'create'])->name('tiendas');


