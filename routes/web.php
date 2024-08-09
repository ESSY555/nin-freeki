<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'home'])->name('home.page');
Route::get('/nin-page', [HomeController::class, 'index'])->name('nin.page');
Route::get('/booking/section', [HomeController::class, 'bookingSection'])->name('booking.section');
Route::get('/training/section', [HomeController::class, 'training'])->name('Training.section');
Route::get('/contact/us', [HomeController::class, 'contactUs'])->name('contact.us');
