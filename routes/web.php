<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ActivityController;

Route::get('/', [ActivityController::class, 'layout'])->name('home');
Route::middleware(['auth'])->group(function () {
    Route::resource('/activity', ActivityController::class);
    Route::get('/pending', [ActivityController::class, 'pending'])->name('activities.pending');
    Route::get('/completed', [ActivityController::class, 'completed'])->name('activities.completed');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
