<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TherapistController;
use App\Http\Controllers\SchoolController;
use App\Http\Controllers\HomeController;
Route::get('/', function () {
    return view('indexpage');
});

Auth::routes(['verify' => true]);

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('therapist/details', [TherapistController::class, 'details'])->name('therapist.details');
Route::get('school/details', [SchoolController::class, 'details'])->name('school.details');
