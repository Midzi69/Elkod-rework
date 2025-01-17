<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;


// MAIN ROUTES
Route::get('/', [HomeController::class, 'index']);
Route::get('/brendovi', [BrandController::class, 'brendoviPocetna'])->name('brands');
Route::get('/partneri', [PartnerController::class, 'partneriPocetna'])->name('partners');

 // CONTACT FORM
 Route::post('contact/send', [ContactController::class, 'send'])->name('contact.send');

// SINGLE PROJECT
Route::get('/projekat/{id}', [ProjectController::class, 'show'])->name('projects.show');

// MULTI-LANGUAGE
Route::get('/en', [HomeController::class, 'indexEn']);
Route::get('/de', [HomeController::class, 'indexDe']);


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

    // PARTNERS
    Route::resource('partners', PartnerController::class)->except(['show']);
});

require __DIR__.'/auth.php';
