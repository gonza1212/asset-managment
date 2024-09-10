<?php

use App\Http\Controllers\AssetController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('web');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
/**
 * ASSETS
 */
Route::get('/assets', [AssetController::class, 'index'])->name('assets.index')->middleware('auth');
Route::get('/assets/{id}', [AssetController::class, 'show'])->name('assets.show')->middleware('auth');
/**
 * PROJECTS
 */
Route::get('/projects', [ProjectController::class, 'index'])->name('projects.index')->middleware('auth');

require __DIR__.'/auth.php';
