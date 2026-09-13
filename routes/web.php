<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RiwayatStatusController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('riwayat-status', RiwayatStatusController::class);