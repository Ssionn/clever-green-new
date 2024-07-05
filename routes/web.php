<?php

use App\Http\Controllers\LandingPageController;
use Illuminate\Support\Facades\Route;


Route::middleware(['web'])->group(function() {
    Route::get('/', [LandingPageController::class, 'index'])->name('landingpage.index');
    Route::get('/about-us', [LandingPageController::class, 'about'])->name('landingpage.about');
    Route::get('/contact-us', [LandingPageController::class, 'contact'])->name('landingpage.contact');
});
