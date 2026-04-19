<?php

use App\Http\Controllers\PasienController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/Pasien', [PasienController::class, 'index']);
Route::get('/Pasien/create', [PasienController::class, 'create']);

