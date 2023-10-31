<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewController;
use App\Http\Controllers\ContactController;


// home
Route::get('/', [HomeController::class, 'index'])->middleware('auth');

// register & Login
Route::get('/login', [NewController::class, 'index'])->name('login');
Route::post('/login', [NewController::class, 'authenticate']);
Route::post('/logout', [NewController::class, 'logout'])->name('logout');

Route::get('/register', [NewController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [NewController::class, 'register']);

// logout
Route::get('/logout', [NewController::class, 'logout']);

// contact
Route::get('/contact', [ContactController::class, 'index']);
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
