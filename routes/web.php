<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CommentaireController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\RecetteController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\TemoignageController;
use Illuminate\Support\Facades\Route;
Route::middleware('guest')->group(function() {
    Route::get('/login', [LoginController::class, 'create'])->name('login');
    Route::post('/login', [LoginController::class, 'store'])->name('login.store');

    Route::get('/register', [RegisterController::class, 'create'])->name('register');
    Route::post('/register', [RegisterController::class, 'store'])->name('register.store');
});
 
Route::middleware('auth')->group(function() {
    Route::get('/logout', LogoutController::class)->name("logout");
    Route::get('/', [HomeController::class, 'index'])->name('home');

    Route::get('/recettes', [RecetteController::class, 'index'])->name('recettes');
    Route::post('/recettes/store', [RecetteController::class, 'store'])->name('recettes.store');
    Route::get('/recettes/filter/{id}', [RecetteController::class, 'filter'])->name('recettes.filter');

    Route::get('/temoignages', [TemoignageController::class, 'index'])->name('temoignages');
    Route::post('/temoignages', [TemoignageController::class, 'store'])->name('temoignages.store');
    Route::post('/temoignages/search', [TemoignageController::class, 'search'])->name('temoignages.search');
    Route::get('/temoignages/{id}', [TemoignageController::class, 'show'])->name('temoignages.show');

    Route::post('/temoignages/{id}', [CommentaireController::class, 'store'])->name('Commentaire');
});