<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\PosyanduBalitaController;

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

Route::get('', function () {
    return view('auth.login');
});

Auth::routes();
    Route::get('/register-posyandu', [RegisterController::class, 'index']);
    Route::post('/register-anggota-posyandu', [RegisterController::class, 'register_posyandu']);

Route::middleware(['auth'])->group(function(){
    Route::get('/dashboard', [DashboardController::class, 'dashboard']);
    Route::get('/register-success', [RegisterController::class, 'register_success']);
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    
    Route::get('/posyandu-balita', [PosyanduBalitaController::class, 'index']);
    Route::post('/tambah-balita', [PosyanduBalitaController::class, 'tambah_balita']);
    Route::put('/edit-balita/{id}', [PosyanduBalitaController::class, 'edit_balita']);
    Route::delete('/hapus-balita/{id}', [PosyanduBalitaController::class, 'hapus_balita']);
});


