<?php

use App\Http\Controllers\KategoriKendaraanController;
use App\Http\Controllers\KendaraanController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('kendaraan', KendaraanController::class);
Route::resource('kategori_kendaraan', KategoriKendaraanController::class);
