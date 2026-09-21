<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MatakuliahController;

Route::get('/matakuliah', [MatakuliahController::class, 'index']);
Route::get('/matakuliah/{kode}', [MatakuliahController::class, 'show']);