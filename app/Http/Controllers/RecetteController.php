<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RecetteController extends Controller
{
    public function index()
    {
        return view('client.recettes.index');
    }
}
