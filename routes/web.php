<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('kendaraan', \App\Http\Controllers\KendaraanController::class);
