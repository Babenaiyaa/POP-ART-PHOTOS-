<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ThemeController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;

// Landing Page (Login/Register)
Route::get('/', function () {
    return view('welcome');
})->name('landing');


// Display the registration form (GET request)
Route::get('register', [App\Http\Controllers\Auth\RegisterController::class, 'showRegistrationForm'])->name('register');

// Handle the registration form submission (POST request)
Route::post('register', [App\Http\Controllers\Auth\RegisterController::class, 'register']);

// Display the login form (GET request)
Route::get('login', [App\Http\Controllers\Auth\LoginController::class, 'showLoginForm'])->name('login');

// Handle the login form submission (POST request)
Route::post('login', [App\Http\Controllers\Auth\LoginController::class, 'login']);

// Logout route
Route::post('logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');

Route::get('/home', [HomeController::class, 'index'])->name('home')->middleware('auth');

// Protected Routes (Authenticated Users Only)
Route::middleware('auth')->group(function () {
    // Home Page (Weekly Theme + Upload + Top Photos)
    Route::get('/home', [HomeController::class, 'index'])->name('home');

    // Handle photo uploads
    Route::post('/upload', [PhotoController::class, 'upload'])->name('photos.upload');

    // View photos under a specific theme
    Route::get('/theme/{id}', [ThemeController::class, 'show'])->name('theme.show');

    Route::put('/update-photo/{id}', [PhotoController::class, 'update'])->name('photos.update');
    Route::delete('/delete-photo/{id}', [PhotoController::class, 'destroy'])->name('photos.delete');

});

Route::post('/photos/{photo}/like', [PhotoController::class, 'like'])->name('photos.like');


// Themes List Page
Route::get('/themes', [ThemeController::class, 'index'])->name('themes.index');
