<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Commentaire;
use App\Models\Recette;
use App\Models\Temoignage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Contracts\Service\Attribute\Required;

class TemoignageController extends Controller
{
    public function index()
    {
        $searchTerm = '';
        $temoignages = Temoignage::with('user')->withCount('commentaire');
        $temoignages =$temoignages->paginate(6);
        
        return view('client.temoignages.index', compact('temoignages', 'searchTerm'));
    }

    public function search(Request $request)
    {
        $searchTerm = $request->input('SearchTemoi'); 

        $temoignages = Temoignage::with('user')->withCount('commentaire');

        if ($searchTerm) {
            $temoignages = $temoignages->where('titre', 'ILIKE', "%{$searchTerm}%");
                // ->orWhere('first_name', 'ILIKE', "%{$searchTerm}%")
        }

        $temoignages = $temoignages->paginate(6); 
        
        return view('client.temoignages.index', compact('temoignages', 'searchTerm'));
    }

    public function show($id)
    {
        $temoignage = Temoignage::with('user')->find($id);
        $comments = Commentaire::with('user')->where('temoignage_id' , $id)->get();
        return view('client.temoignages.show', compact('temoignage', 'comments'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'titre' => 'required|string|max:255',
            'description' => 'required|string|min:50',
            // 'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        $Temoignage = new Temoignage();
        $Temoignage->user_id = Auth::id();
        $Temoignage->titre = $request->titre;
        $Temoignage->description = $request->description;

        if ($request->hasFile('image')) {
            
            $photoPath = $request->file('image')->store('photos', 'public');
            $Temoignage->photo = $photoPath;
        } else {
            $Temoignage->photo =  'photos/defaultTem.png';
        }
        $Temoignage->save();

        return redirect()->route('temoignages')->with('success','temoignages Ajouter avec success');
    }
}
