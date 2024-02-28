<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('dashboard.home');
});

Route::get('/login', function () {
    return view('auth.login');
})->name('login.member');

Route::get('/register', function () {
    return view('auth.register');
})->name('register.member');

Route::get('/forgot-password', function () {
    return view('auth.forgot');
})->name('forgot.password');

Route::get('/reset-password', function () {
    return view('auth.reset');
})->name('reset.password');
