<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('tours/skardu', function () {
    return view('detail');
})->name('tour');