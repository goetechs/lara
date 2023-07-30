<?php

use Illuminate\Support\Facades\Route;

Route::get('/' , function() {
    return view('pages/home');
})->name('home');

Route::get('/apropos', function() {
    return view('pages/apropos');
})->name('apropos');