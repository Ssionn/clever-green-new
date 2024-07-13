<?php

use App\Http\Controllers\Auth\DashboardController;
use App\Http\Controllers\Auth\User\UserController;
use App\Http\Controllers\LandingPageController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

Route::middleware(['web'])->group(function () {
    Route::get('/', [LandingPageController::class, 'index'])->name('landingpage.index');
    Route::get('/about-us', [LandingPageController::class, 'about'])->name('landingpage.about');
    Route::get('/contact-us', [LandingPageController::class, 'contact'])->name('landingpage.contact');
});

Route::middleware(['auth'])->group(function () {
    Route::prefix('/dashboard')->group(function () {
        Route::get('/', [DashboardController::class, 'index'])->name('auth.dashboard');

        Route::prefix('/users')->group(function () {
            Route::get('/', [UserController::class, 'index'])->name('auth.dashboard.users');
            Route::post('/', [UserController::class, 'store'])->name('auth.dashboard.users.store');
            Route::delete('/{id}', [UserController::class, 'destroy'])->name('auth.dashboard.users.destroy');
        });
    });
});
