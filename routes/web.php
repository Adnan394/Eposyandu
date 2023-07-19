<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IbuController;
use App\Http\Controllers\AnakController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\vaksinController;
use App\Http\Controllers\PetugasController;
use App\Http\Controllers\PosyanduController;
use App\Http\Controllers\ImunisasiController;
use App\Http\Controllers\auth\LoginController;
use App\Http\Controllers\auth\RegisterController;

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

Route::get('login', [LoginController::class, 'index'])->name('login');
Route::post('login', [LoginController::class, 'store'])->name('login.store');
Route::resource('register', RegisterController::class);
Route::get('logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/', function () {
    return view('welcome');
})->middleware('auth');

Route::middleware('auth')->group(function(){
    Route::get('/user', [UserController::class, 'index'])->name('user');
    Route::resource('/anak', AnakController::class);
    Route::resource('/ibu', IbuController::class);
    Route::resource('/imunisasi', ImunisasiController::class);
    Route::resource('/vaksin', vaksinController::class);
    Route::resource('/petugas', PetugasController::class);
    Route::resource('/posyandu', PosyanduController::class);
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});