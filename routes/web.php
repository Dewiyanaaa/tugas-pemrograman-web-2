<?php

use App\Http\Controllers\PasienController;
use Illuminate\Support\Facades\Route;


Route::get('/', [PasienController::class, 'index']);

Route::get('/pasien', [PasienController::class, 'index'])->name('pasien.index');
Route::get('/pasien/create', [PasienController::class, 'create'])->name('pasien.create');
Route::post('/pasien/store', [PasienController::class, 'store'])->name('pasien.store');
Route::get('/pasien/{pasien}/edit', [PasienController::class, 'edit'])->name('pasien.edit');
Route::PUT('/pasien/{pasien}', [PasienController::class, 'update'])->name('pasien.update');
Route::DELETE('/pasien/{pasien}', [PasienController::class, 'destroy'])->name('pasien.destroy');

