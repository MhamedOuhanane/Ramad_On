<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Recette;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RecetteController extends Controller
{
    public function index()
    {  
        $recettes = Recette::with('user')->with('categorie')->get();
        $categories = Categorie::all();

        $Carbon = new Carbon();
        return view('client.recettes.index', compact('categories', 'recettes', 'Carbon'));
    }

    public function filter($id)
    {
        $recettes = Recette::with('user')->with('categorie')->where('categorie_id','=', $id)->get();
        $categ = Categorie::find($id)->name ?? '';
        $categories = Categorie::all();
        
        $Carbon = new Carbon();
        return view('client.recettes.index', compact('categories', 'recettes', 'categ', 'Carbon'));
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
