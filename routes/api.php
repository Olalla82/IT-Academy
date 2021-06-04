<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PassportController;
use App\Http\Controllers\CuadrosController;
use App\Http\Controllers\TiendasController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

    Route::get('register', [PassportController::class, 'register_index'])->name('register.show');
    Route::post('register', [PassportController::class, 'register'])->name('registro.usuario');

    Route::get('login', [PassportController::class, 'login_index'])->name('login.show');
    Route::post('login', [PassportController::class, 'login'])->name('login.usuario');

Route::middleware('auth:api')->group(function(){
    
  
    Route::post('logout', [PassportController::class, 'logout']);

    Route::get('cuadros', [CuadrosController::class, 'index'])->name('cuadros.index'); 

    Route::post('cuadros', [CuadrosController::class, 'store'])->name('cuadros.store');

    Route::delete('cuadros/{cuadro}', [CuadrosController::class, 'delete'])->name('cuadros.delete');

    
    
    Route::get('shop', [TiendasController::class, 'index'])->name('shop.index'); 

    Route::post('shop', [TiendasController::class, 'store'])->name('shop.store');

   
   
});





