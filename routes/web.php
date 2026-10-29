<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('raihan');
});

Route::get('/halo/{nama}', function (string $nama) {
    return "Hallo, $nama";
});