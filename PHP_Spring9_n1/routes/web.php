<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\v1Controller;
use App\Http\Controllers\v2Controller;
use App\Http\Controllers\v3Controller;
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

Route::get('/', v1Controller::class);

Route::get('v2', v2Controller::class);

Route::get('v3/{nom}', v3Controller::class);

