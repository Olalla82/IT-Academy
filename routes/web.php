<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CrudController;
use App\Http\Controllers\EditarController;

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

//ROLES Y PERMISOS
Route::get('editar',  [EditarController::class, 'index'])->name('editar.index');

Route::get('editar/{id}/destroy', [EditarController::class, 'destroy'])->name('editar.destroy');

//CRUD ROUTES
Route::get('/',  [CrudController::class, 'index'])->name('crud.index');

Route::get ('create', [CrudController::class, 'create'])->name('crud.create');

Route::post ('create', [CrudController::class, 'store'])->name('crud.store');

Route::get ('update', [CrudController::class, 'update'])->name ('crud.update');

Route::put ('update', [CrudController::class, 'restore'])->name('crud.restore');

Route::get ('delete', [CrudController::class, 'delete']);

Route::delete ('delete', [CrudController::class, 'delete_post'])->name('delete.post');//delete

//ERROR 404
Route::get('error', function(){
    return response('PAGINA NO ENCONTRADA - ERROR 404', 404);
});

//AUTENTICACION ROUTES
Route::get('/dashboard', function () {
    return view('dashboard');
  // return view('crud.index');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
