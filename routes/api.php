<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PlayerController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\AuthController;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('login', [AuthController::class, 'login'])->name('auth.login');

Route::post('login', [AuthController::class, 'log'])->name('auth.log');




//Route::middleware('jwt.auth')->group(function(){
    

        Route::get('/', [PlayerController::class, 'index'])->name('player.index');

        Route::get('players/create', [PlayerController::class, 'create'])->name('player.create');

        Route::post('players', [PlayerController::class, 'store'])->name('player.store');

        Route::get('players/{player}', [PlayerController::class, 'show'])->name('player.show');

        Route::get('players/{player}/edit', [PlayerController::class, 'edit'])->name('player.edit');

        Route::put('players/{player}', [PlayerController::class, 'update'])->name('player.update');



        Route::get('game', [GameController::class, 'index'])->name('games.index');

        Route::delete('players/{id}/games', [GameController::class, 'destroy'])->name('games.destroy');

        
Route::post('logout', [AuthController::class, 'logut'])->name('auth.logout');

  //  });


