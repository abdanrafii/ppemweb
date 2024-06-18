<?php

use App\Http\Controllers\ProfileController;
use App\Models\Kendaraan;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard')->middleware(['verified']);

    Route::resource('kendaraan', \App\Http\Controllers\KendaraanController::class)->middleware('AksesKendaraan:admin');

    Route::get('/userindex', [\App\Http\Controllers\UserController::class, 'index'])->name('userindex')->middleware('AksesKendaraan:user');
});


require __DIR__.'/auth.php';
