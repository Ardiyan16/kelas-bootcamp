<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'home']);
Route::get('/data-mahasiswa', [PageController::class, 'data_mahasiswa']);
Route::get('/tambah-mahasiswa', [PageController::class, 'tambah_mahasiswa']);
Route::post('/simpan-mahasiswa', [PageController::class, 'simpan_mahasiswa']);
Route::get('/hapus-mahasiswa/{id}', [PageController::class, 'hapus_mahasiswa']);

