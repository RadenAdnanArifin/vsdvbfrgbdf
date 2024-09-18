<?php

// use App\Http\Controllers\AdashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\Admin\AdashboardController;
use App\Http\Controllers\Admin\ApenggunaController;
use App\Models\PetaKehadiran;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/pengguna/list-data', [PenggunaController::class, 'lihatData']);
Route::get('/pengguna/ambil-data/{nip}', [PenggunaController::class, 'ambilData']);
Route::get('/pengguna/simpan', [PenggunaController::class, 'simpanData']);
Route::get('/pengguna/hapus{nip}', [PenggunaController::class, 'hapusData']);

Route::get('/pengguna/list-data', [PenggunaController::class, 'lihatData']);
Route::get('/pengguna/ambil-data/{nip}', [PenggunaController::class, 'ambilData']);
Route::get('/pengguna/simpan', [PenggunaController::class, 'simpanData']);
Route::get('/pengguna/hapus{nip}', [PenggunaController::class, 'hapusData']);

Route::get('/admin/dashbroad', [AdashboardController::class, 'index']);
Route::get('/admin/pengguna', [ApenggunaController::class, 'index']);