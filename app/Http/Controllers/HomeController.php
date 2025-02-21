<?php

namespace App\Http\Controllers;

use App\Models\Recette;
use App\Models\Temoignage;
use Illuminate\Http\Request;

class HomeController extends Controller
{
        public function index()
        {
            $TopTemoignage = Temoignage::with('user')->withCount('commentaire')->orderBy('commentaire_count', 'desc')->limit(3)->get();
            $temoignages = Temoignage::all();
            $recettes = Recette::all();
            return view('client/index', compact('temoignages', 'recettes', 'TopTemoignage'));
        }
}
