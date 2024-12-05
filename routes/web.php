<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmailConfirmationController; 

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/register', function () {
    return view('register');
})->name('register');

Route::get('/create-event', function () {
    return view('create_event');
})->name('create_event');

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/email/confirmation/{token}', [EmailConfirmationController::class, 'confirm'])->name('email_confirmation');





