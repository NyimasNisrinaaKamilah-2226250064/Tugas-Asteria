<?php

use App\Http\Controllers\BioskopController;
use App\Http\Controllers\DetailFilmController;
use App\Http\Controllers\FilmController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\KotaController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::resource('kota',KotaController::class);
Route::resource('bioskop',BioskopController::class);
Route::resource('film',FilmController::class);
Route::resource('detail',DetailFilmController::class);
Route::resource('jadwal',JadwalController::class);


