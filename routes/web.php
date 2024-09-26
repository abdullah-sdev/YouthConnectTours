<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\TourController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');

// Route::get('tours/skardu', function () {
//     return view('detail');
// })->name('tour');

Route::get('tours/{tour}', [TourController::class, 'detail'])->name('tour.detail');