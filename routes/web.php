<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('', function () {
    return view('auth/connexion');
});

Route::get('/connexion', [AuthController::class, 'index'])->name('auth.connexion');
Route::get('/inscription', [AuthController::class, 'inscret'])->name('auth.inscription');
 
// Route::middleware('auth')->group(function() {
    Route::get('/recettes', function() {
        return view('client/recettes/index');
    });
    
    Route::get('/temoignages', function() {
        return view('client/temoignages/index');
    });
    
    Route::get('/temoignages/{id}', function() {
        return view('client/temoignages/show');
    });
// });