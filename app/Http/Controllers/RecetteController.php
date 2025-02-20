<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Recette;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RecetteController extends Controller
{
    public function index()
    {
        $categories = Categorie::all();
        return view('client.recettes.index', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'titre' => 'required',
            'description' => 'required|string|min:50',
            'temps_prepare' => 'required',
            'categorie' => 'required',
            // 'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        
        $recettes = new Recette();
        $recettes->titre = $request->titre;
        $recettes->description = $request->description;
        $recettes->temps_prepare = $request->temps_prepare;
        $recettes->user_id = Auth::id();
        $recettes->categorie_id = $request->categorie;
        
        if ($request->hasFile('photo')) {
            
            $photoPath = $request->file('photo')->store('photos', 'public');
            $recettes->photo = $photoPath;
        } else {
            $recettes->photo =  'photos/defaultTem.png';
        }

        $recettes->save();

        return redirect()->route('recettes')->with('success','temoignages Ajouter avec success');
        
    }
}
