<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Commentaire;
use App\Models\Recette;
use App\Models\Temoignage;
use Illuminate\Http\Request;

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
}
