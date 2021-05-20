<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CrudController;

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

Route::get('/', [HomeController::class, 'index'])->name('admin.home');

Route::get('reservas', [CrudController::class, 'index'])->name('reservas.index');

Route::get('reservas/create', [CrudController::class, 'create'])->name('reservas.create');

Route::post('reservas', [CrudController::class, 'store'])->name('reservas.store');

Route::get('reservas/{hotel}', [CrudController::class, 'show'])->name('reservas.show');

Route::get('reservas/{hotel}/edit', [CrudController::class, 'edit'])->name('reservas.edit');

Route::put('reservas/{hotel}', [CrudController::class, 'update'])->name('reservas.update');

Route::delete('reservas/{hotel}', [CrudController::class, 'destroy'])->name('reservas.delete');
    

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
