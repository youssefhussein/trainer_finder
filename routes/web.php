<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/home' , function () {
    return view('home');
})->middleware(['auth', 'verified'])->name('home');

Route::get('/trainers', function () {
    return view('trainers.index');
})->middleware(['auth', 'verified'])->name('trainers.index');

Route::get('/aboutus', function () {
    return view('aboutus');
})->name('aboutus');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
