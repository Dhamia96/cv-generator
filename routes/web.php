<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;

Route::get('/', function () {
    return view('profiles.welcomeCv');
})->name('welcomeCv');
Route::view('/profiles/cv_maker', 'profiles.cv_maker')->name('cv_maker');
Route::get('/profiles/{profile}', ProfileController::class .'@show')->name('profiles.show');
Route::get('/cv-maker', [ProfileController::class, 'showCvMaker']);
