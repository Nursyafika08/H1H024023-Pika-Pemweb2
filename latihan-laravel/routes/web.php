<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaDetailController;
use App\Http\Controllers\MatakuliahController;
use App\Http\Controllers\MahasiswaIpKController;

Route::get('/', function () {
    return redirect()->route('matakuliah.index');
});

Route::get('/matakuliah', [MatakuliahController::class, 'index'])
    ->name('matakuliah.index');

Route::get('/matakuliah/{kode}', [MatakuliahController::class, 'show'])
    ->name('matakuliah.show');

Route::get('/mahasiswa/{mahasiswa}', [MahasiswaDetailController::class, 'show'])
    ->name('mahasiswa.show');

Route::get('/mahasiswa-ipk-tertinggi', [MahasiswaIpKController::class, 'index'])
    ->name('mahasiswa.ipk-tertinggi');