<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PhytagorasController;
use App\Http\Controllers\KonversiSuhuController;

Route::get('/', function () {
    return view('home');
});

//Route Phytagoras
Route::get('/phytagoras', [PhytagorasController::class, 'index']);
Route::post('/phytagoras/hitung', [PhytagorasController::class, 'hitung']);

//Route Konversi Suhu
Route::get('/suhu', [KonversiSuhuController::class, 'index']);
Route::post('/suhu/hitung', [KonversiSuhuController::class, 'hitung']);