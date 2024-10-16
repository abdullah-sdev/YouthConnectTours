<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AttractionController;
use App\Http\Controllers\DestinationController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\TourController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('about', [HomeController::class, 'about'])->name('about');
Route::get('destinations', [HomeController::class, 'destination'])->name('destinys');
Route::get('vacations', [HomeController::class, 'vaccations'])->name('vaccations');
Route::get('terms', [HomeController::class, 'terms'])->name('terms');

// Route::get('tours/skardu', function () {
//     return view('detail');
// })->name('tour');
Route::get('attractions/{tour}', [TourController::class, 'show'])->name('tour.detail');

Route::prefix('adminsa')->name('adminsa.')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('index');

    Route::get('tour/create', [TourController::class, 'create'])->name('tour.create');
    Route::post('tour/create', [TourController::class, 'store'])->name('tour.store');

    Route::resource('destination', DestinationController::class);
    Route::resource('destination.attraction', AttractionController::class);
    // Route::resource('attraction.gallery', GalleryController::class);
    // Route::resource('attraction.review', ReviewController::class);
    Route::resource('tags', TagController::class);


    Route::get('destination/{destination}/attraction/{attraction}/edit', [AttractionController::class, 'edit'])->name('destination.attraction.edit');
    Route::put('destination/{destination}/attraction/{attraction}', [AttractionController::class, 'update'])->name('destination.attraction.update');
    
});
