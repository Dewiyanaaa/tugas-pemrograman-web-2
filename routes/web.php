<?php

use App\Http\Controllers\PasienController;
use Illuminate\Support\Facades\Route;


Route::get('/', [PasienController::class, 'index']);

Route::get('/Pasien', [PasienController::class, 'index'])->name('pasien.index');
Route::get('/Pasien/create', [PasienController::class, 'create'])->name('pasien.create');
Route::post('/Pasien/store', [PasienController::class, 'store'])->name('pasien.store');

