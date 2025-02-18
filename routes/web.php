<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/connexion', function() {
    return view('auth/connexion');
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