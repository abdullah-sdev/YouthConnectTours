<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AttractionController;
use App\Http\Controllers\DestinationController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\TourController;
use App\Models\Attraction;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('about', [HomeController::class, 'about'])->name('about');
Route::get('destinations', [HomeController::class, 'destination'])->name('destinys');
Route::get('vacations', [HomeController::class, 'vaccations'])->name('vaccations');
Route::get('terms', [HomeController::class, 'terms'])->name('terms');
Route::get('contact', [HomeController::class, 'contact'])->name('contact'); 
Route::get('book-a-tour', [HomeController::class, 'bookATour'])->name('book-a-tour');

Route::get('make-a-tour', [HomeController::class, 'makeATour'])->name('tour.make');
Route::post('make-a-tour', [HomeController::class, 'requestTour'])->name('tour.request');
// Route::get('/travel/step1', [HomeController::class, 'step1'])->name('makeatour.step1');
// Route::post('/travel/step2', [HomeController::class, 'step2'])->name('makeatour.step2');
// Route::get('/travel/step2', [HomeController::class, 'step2Form'])->name('makeatour.step2.form');
// Route::post('/travel/step3', [HomeController::class, 'step3'])->name('makeatour.step3');
// Route::post('/travel/submit', [HomeController::class, 'submit'])->name('makeatour.submit');

Route::get('/api/attractions/{destination}', function ($destination) {
    return Attraction::select('id', 'name')->where('destination_id', $destination)->get()->toArray();
});


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
