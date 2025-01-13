<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\BrandController;
use Illuminate\Support\Facades\Route;


// MAIN ROUTES
Route::get('/', [HomeController::class, 'index']);
Route::get('/brendovi', [BrandController::class, 'brendoviPocetna'])->name('brands');

Route::get('/projekat', function() {
    return view('projects.projekat');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    //PROFILE
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // PROJECTS
    Route::resource('projects', ProjectController::class)->except(['show']);

    // BRANDS
    Route::resource('brands', BrandController::class)->except(['show']);

});

require __DIR__.'/auth.php';