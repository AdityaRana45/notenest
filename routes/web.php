<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

// Route::get('/', function () {
//     return Inertia::render('welcome');
// })->name('home');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('dashboard', function () {
        return Inertia::render('dashboard');
    })->name('dashboard');
});

require __DIR__.'/settings.php';
require __DIR__.'/auth.php';

Route:: view('/','home');

Route::view('/medical','subjects.medical');
Route::view('/computer','subjects.computer');
Route::view('/science','subjects.science');
Route::view('/english','subjects.english');
Route::view('/geography','subjects.geography');
Route::view('/gk','subjects.gk');
Route::view('/history','subjects.history');
Route::view('/poltical','subjects.poltical');
Route::view('/reasoning','subjects.reasoning');
Route::view('/maths','subjects.maths');
Route::view('/state','subjects.state');
Route::view('/ssc','subjects.ssc');

