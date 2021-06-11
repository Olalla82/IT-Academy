<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlayerController;
use App\Http\Controllers\GameController;

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

/*Route::get('/', function () {
    return view('welcome');
});*/

//GAME

Route::get('game', [GameController::class, 'index'])->name('games.index');

Route::get('games', [GameController::class, 'show'])->name('games.show');

Route::post('games/players', [GameController::class, 'store'])->name('games.store');

//Route::get('players/edit', [PlayerController::class, 'edit'])->name('games.edit');

//Route::put('players/{game}', [PlayerController::class, 'update'])->name('games.update');


Route::delete('players/{id}/games', [PlayerController::class, 'destroy'])->name('games.destroy');



//PLAYER

Route::get('/', [PlayerController::class, 'index'])->name('player.index');

Route::get('players/create', [PlayerController::class, 'create'])->name('player.create');

Route::post('players', [PlayerController::class, 'store'])->name('player.store');

Route::get('players/{id}', [PlayerController::class, 'show'])->name('player.show');


//Route::get('players/edit', [PlayerController::class, 'edit'])->name('player.edit');

//Route::put('players/{game}', [PlayerController::class, 'update'])->name('player.update');


//Route::delete('players/{id}/games', [PlayerController::class, 'destroy'])->name('player.destroy');


//Route::get('players/ranking/loser', [PlayerController::class, 'loser]);

//Route::get('players/ranking/winner', [PlayerController::class, 'winner]);
