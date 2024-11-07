<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::resource("mahasiswa", App\Http\Controllers\MahasiswaController::class);
