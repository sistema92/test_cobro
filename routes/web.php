<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\HistorialController;
use  App\Http\Controllers\RevController;
use  App\Http\Controllers\CobController;

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

Route::get('/', function () {
    return view('index');
});

Route::resource('cob', CobController::class);
Route::resource('rev', RevController::class);
