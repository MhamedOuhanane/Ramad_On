<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Recette;
use App\Models\Temoignage;
use Illuminate\Http\Request;

class TemoignageController extends Controller
{
    public function index()
    {
        $temoignages = Categorie::find(1)->Recettes::pagination();
        $categories = Categorie::all();
        return view('client.temoignages.index', compact('temoignages'));
    }

    public function show($id)
    {
        return view('client.temoignages.show');
    }
}
