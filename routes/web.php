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
use App\Http\Controllers\auth\addAnakController;
use App\Http\Controllers\auth\RegisterController;
use App\Http\Controllers\auth\addImunisasiController;
use App\Models\Petugas;
use App\Models\Posyandu;
use App\Models\Vaksin;

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

Route::middleware('auth')->prefix('admin')->group(function(){
    Route::get('/user', [UserController::class, 'index'])->name('user');
    Route::resource('/dataanak', AnakController::class);
    Route::resource('/ibu', IbuController::class);
    Route::resource('/data-imunisasi', ImunisasiController::class);
    Route::resource('/vaksin', vaksinController::class);
    Route::resource('/petugas', PetugasController::class);
    Route::resource('/posyandu', PosyanduController::class);
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});
Route::middleware('auth')->group(function(){
    Route::resource('/anak', addAnakController::class);
    Route::resource('/imunisasi', addImunisasiController::class);
    Route::get('data-petugas', function() {
        $data = Petugas::paginate(10);
        return view('data.petugas', ['data'=>$data]);
    })->name('data-petugas');
    Route::get('data-vaksin', function() {
        $data = Vaksin::paginate(10);
        return view('data.vaksin', ['data'=>$data]);
    })->name('data-vaksin');
    Route::get('data-posyandu', function() {
        $data = Posyandu::paginate(10);
        return view('data.posyandu', ['data'=>$data]);
    })->name('data-posyandu');
});

Route::get('403', function() {
    return view('403');
});