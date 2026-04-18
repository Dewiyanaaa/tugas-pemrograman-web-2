<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/Pasien', function () {
    return view('Pasien.index' , ['title' => 'Pasien']);
});

Route::get('/Pasien/create', function () {
    return view('Pasien.create' , ['title' => ' Create Pasien']);
});
