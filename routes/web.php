<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about-me', function () {
    return view('AboutMe');
});

Route::get('/skills', function () {
    return view('Skills');
});

Route::get('/hobbies', function () {
    return view('Hobbies');
});
