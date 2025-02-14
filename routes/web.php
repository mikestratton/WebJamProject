<?php

use App\Http\Controllers\PublickeysController;
use App\Http\Controllers\TodoController;
use App\Http\Controllers\NoteController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImageController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::resource('todos', TodoController::class)
    ->only(['index', 'store', 'edit', 'update', 'destroy'])
    ->middleware(['auth', 'verified']);

Route::resource('notes', NoteController::class)
    ->only(['index', 'store', 'edit', 'update', 'destroy'])
    ->middleware(['auth', 'verified']);

Route::resource('keys', PublickeysController::class)
    ->only(['index', 'store', 'destroy'])
    ->middleware(['auth', 'verified']);

//Route::get('/multiuploads', 'UploadController@uploadForm');
//Route::post('/multiuploads', 'UploadController@uploadSubmit');

Route::resource('images', ImageController::class)
    ->only(['index', 'store', 'destroy']);

require __DIR__.'/auth.php';
