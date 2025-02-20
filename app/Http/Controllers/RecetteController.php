<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use Illuminate\Http\Request;

class RecetteController extends Controller
{
    public function index()
    {
        
        $categories = Categorie::all();
        return view('client.recettes.index', compact('categories'));
    }
}
