<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

Route::get('/login', [LoginController::class, 'create'])->name('auth.login');
// Route::post('/login', [LoginController::class, 'store'])->name('auth.login');

// Route::get('/register', [RegisterController::class, 'create'])->name('auth.register');
// Route::post('/register', [RegisterController::class, 'store'])->name('auth.register.store');
 
// Route::middleware('auth')->group(function() {
//     Route::get('/', function() {
//         return view('client/index');
//     });
//     Route::get('/recettes', function() {
//         return view('client/recettes/index');
//     });
    
//     Route::get('/temoignages', function() {
//         return view('client/temoignages/index');
//     });
    
//     Route::get('/temoignages/{id}', function() {
//         return view('client/temoignages/show');
//     });
// });