<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;

Route::get('/', function () {
    return view('profiles.welcomeCv');
});

Route::get('/profiles/{profile}', ProfileController::class .'@show')->name('profiles.show');
Route::get('/cv-maker', [ProfileController::class, 'showCvMaker']);