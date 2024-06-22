<?php

use Illuminate\Support\Facades\Route;

use App\http\Controllers\AboutMeController;
use App\http\Controllers\SkillsController;
use App\http\Controllers\HobbiesController;

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

Route::get('/about-me', [AboutMeController::class, 'index'])->name('AboutMe');

Route::get('/skills', [SkillsController::class, 'index'])->name('Skills');

Route::get('/hobbies', [HobbiesController::class, 'index'])->name('Hobbies');





