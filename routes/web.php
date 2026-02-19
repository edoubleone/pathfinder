<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::get('/', fn() => view('home'))->name('home');
Route::get('/about', fn() => view('about'))->name('about');
Route::get('/services', fn() => view('services'))->name('services');
Route::get('/process', fn() => view('process'))->name('process');
Route::get('/privacy', fn() => view('privacy'))->name('privacy');
Route::get('/terms', fn() => view('terms'))->name('terms');

Route::get('/contact', [ContactController::class, 'show'])->name('contact');
Route::post('/contact', [ContactController::class, 'send'])->name('contact.send');
