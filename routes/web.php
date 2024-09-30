<?php

use App\Http\Controllers\ActivityController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TourController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');

// Route::get('tours/skardu', function () {
//     return view('detail');
// })->name('tour');

Route::get('tours/{tour}', [TourController::class, 'show'])->name('tour.show');

Route::resource('activities', ActivityController::class); // CRUD

Route::get('adminsa', [AdminController::class, 'index']);
Route::get('adminsa/tour/create', [TourController::class, 'create'])->name('tour.create');
Route::post('adminsa/tour/create', [TourController::class, 'store'])->name('tour.store');