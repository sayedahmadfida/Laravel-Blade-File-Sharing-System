<?php

use App\Models\Board;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SendController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BoardController;
use App\Http\Controllers\FolderController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PostFileController;
use App\Http\Controllers\BoardUserController;

Route::get('/', function () {
    return redirect()->route('login');
});



Route::middleware(['auth', 'verified', 'setSession'])->group(function () {
    Route::resource('dashboard', HomeController::class);
    
    Route::resource('folder', FolderController::class);
    Route::resource('post-file', PostFileController::class);
    Route::post('/upload', [PostFileController::class, 'uploadFile'])->name('upload');
});

require __DIR__.'/auth.php';
