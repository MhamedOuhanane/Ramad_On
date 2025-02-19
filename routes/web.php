<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

Route::get('/login', [LoginController::class, 'create'])->name('login');
Route::post('/login', [LoginController::class, 'store'])->name('login.store');

Route::get('/register', [RegisterController::class, 'create'])->name('register');
Route::post('/register', [RegisterController::class, 'store'])->name('register.store');
 
Route::middleware('auth')->group(function() {
    Route::get('/', function() {
        return view('client/index');
    });
    Route::get('/recettes', function() {
        return view('client/recettes/index');
    });
    
    Route::get('/temoignages', function() {
        return view('client/temoignages/index');
    });
    
    Route::get('/temoignages/{id}', function() {
        return view('client/temoignages/show');
    });
});