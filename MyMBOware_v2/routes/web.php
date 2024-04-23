<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DirectionController;
use App\Http\Controllers\DepartementController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    // Les routes pour agir sur le profil
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Les routes pour agir sur les départements
    Route::get('/departements', [DepartementController::class, 'index'])->name('departement.index');
    Route::get('/departements/create', [DepartementController::class, 'create'])->name('departement.create');
    Route::post('/departements/store', [DepartementController::class, 'store'])->name('departement.store');
    Route::get('/departements/{departement}', [DepartementController::class, 'show'])->name('departement.show');
    Route::get('/departements/{departement}/edit', [DepartementController::class, 'edit'])->name('departement.edit');
    Route::put('/departements/{departement}', [DepartementController::class, 'update'])->name('departement.update');
    Route::delete('/departements/{departement}', [DepartementController::class, 'destroy'])->name('departement.destroy');

    //Les routes pour agir sur les directions
    Route::get('/directions', [DirectionController::class, 'index'])->name('direction.index');
});

require __DIR__.'/auth.php';
