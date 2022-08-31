<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('urls', 'App\Http\Controllers\UrlController');
Route::resource('u', 'App\Http\Controllers\UserController');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
