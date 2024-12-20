<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TrainerController;
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

Route::get('/trainers', [TrainerController::class,'index'])->middleware(['auth', 'verified'])->name('trainers.index');


Route::get('/aboutus', function () {
    return view('aboutus');
})->name('aboutus');

Route::get('/admin', function () {
    return view('admin.index');
})->middleware(['auth', 'verified'])->name('admin.index');

Route::get('/admin/trainer-applications', function () {
    return view('admin.applications');
})->middleware(['auth', 'verified'])->name('admin.applications.index');
Route::get('/admin/trainer-view', function () {
    return view('admin.trainers');
})->middleware(['auth', 'verified'])->name('admin.trainers.index');
Route::get('/admin/users-view', function () {
    return view('admin.users');
})->middleware(['auth', 'verified'])->name('admin.users.index');




Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
