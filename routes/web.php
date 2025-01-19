<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\PosyanduBalitaController;
use App\Http\Controllers\ImunisasiController;
use App\Http\Controllers\VitaminController;
use App\Http\Controllers\PenimbanganController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\AdminController;

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
    
    Route::get('/data-bayi-balita', [PosyanduBalitaController::class, 'index']);
    Route::get('/detail-data-bayi-balita/{id}', [PosyanduBalitaController::class, 'detail']);
    Route::get('/cetak-data-bayi-balita/{id}', [PosyanduBalitaController::class, 'cetak']);
    Route::post('/tambah-balita', [PosyanduBalitaController::class, 'tambah_balita']);
    Route::put('/edit-balita/{id}', [PosyanduBalitaController::class, 'edit_balita']);
    Route::delete('/hapus-balita/{id}', [PosyanduBalitaController::class, 'hapus_balita']);

    Route::get('/imunisasi', [ImunisasiController::class, 'index']);
    Route::post('/fetch-detail', [ImunisasiController::class, 'fetchDetail'])->name('fetch.detail');
    Route::post('/tambah-imunisasi', [ImunisasiController::class, 'tambah_imunisasi']);
    Route::delete('/hapus-imunisasi/{id}', [ImunisasiController::class, 'hapus_imunisasi']);

    Route::get('/vitamin', [VitaminController::class, 'index']);
    Route::post('/fetch-data', [VitaminController::class, 'fetchData'])->name('fetc.detail');
    Route::post('/tambah-vitamin', [VitaminController::class, 'tambah_vitamin']);
    Route::delete('/hapus-vitamin/{id}', [VitaminController::class, 'hapus_vitamin']);

    Route::get('/penimbangan', [PenimbanganController::class, 'index']);
    Route::get('/status-gizi', [PenimbanganController::class, 'calculateGizi'])->name('calculateGizi');
    Route::post('/tambah-penimbangan', [PenimbanganController::class, 'tambah_penimbangan']);

    Route::get('/cetak-laporan', [LaporanController::class, 'laporan']);
    Route::get('/cetak-laporan-data-bayi-balita/{tglawal}/{tglakhir}', [LaporanController::class, 'cetak_data_bayi']);
    Route::get('/cetak-laporan-data-penimbangan/{tglawal}/{tglakhir}', [LaporanController::class, 'cetak_penimbangan']);
    Route::get('/cetak-laporan-data-imunisasi/{tglawal}/{tglakhir}', [LaporanController::class, 'cetak_imunisasi']);
    Route::get('/cetak-laporan-data-vitamin/{tglawal}/{tglakhir}', [LaporanController::class, 'cetak_vitamin']);

    Route::get('/posyandu-nusa-indah', [AdminController::class, 'posyandu_nusa_indah']);
    Route::get('/posyandu-dahlia', [AdminController::class, 'posyandu_dahlia']);
    Route::get('/posyandu-mawar-merah', [AdminController::class, 'posyandu_mawar_merah']);
    Route::get('/posyandu-melati-putih', [AdminController::class, 'posyandu_melati_putih']);
    Route::get('/posyandu-aster', [AdminController::class, 'posyandu_aster']);
    Route::get('/posyandu-anggrek', [AdminController::class, 'posyandu_anggrek']);
    Route::get('/data-pengguna', [AdminController::class, 'data_pengguna']);
    Route::put('/edit-pengguna/{id}', [AdminController::class, 'edit_pengguna']);
});


