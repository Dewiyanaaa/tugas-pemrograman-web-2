<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\PoliklinikController;
use App\Http\Controllers\DokterController;

Route::get('/', function () {
    return redirect('/pasien');
});

Route::get('/pasien', [PasienController::class, 'index'])->name('pasien.index');
Route::get('/pasien/create', [PasienController::class, 'create'])->name('pasien.create');
Route::post('/pasien/store', [PasienController::class, 'store'])->name('pasien.store');
Route::get('/pasien/{pasien}/edit', [PasienController::class, 'edit'])->name('pasien.edit');
Route::put('/pasien/{pasien}', [PasienController::class, 'update'])->name('pasien.update');
Route::get('/pasien/{pasien}', [PasienController::class, 'show'])->name('pasien.show');
Route::delete('/pasien/{pasien}', [PasienController::class, 'destroy'])->name('pasien.destroy');

Route::resource('poliklinik', PoliklinikController::class);

/*
|--------------------------------------------------------------------------
| DOKTER
|--------------------------------------------------------------------------
*/

Route::get('/dokter/trash', [DokterController::class, 'trash'])
    ->name('dokter.trash');

Route::resource('dokter', DokterController::class);