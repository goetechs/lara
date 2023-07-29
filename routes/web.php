<?php

use Illuminate\Support\Facades\Route;

Route::get('/' , function() {
    return view('pages/home');
});

Route::get('/apropos', function() {
    return view('pages/apropos');
});