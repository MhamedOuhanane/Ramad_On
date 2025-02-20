<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Recette;
use App\Models\Temoignage;
use Illuminate\Http\Request;

class TemoignageController extends Controller
{
    public function index(Request $request)
    {
        $temoignages = Temoignage::with('user')->withCount('Commentaires')->get();
        
        // if ($request->has('search') && $request->search != '') {
        //     $searchTerm = $request->search;

        //     $temoignages->where(function($query) use ($searchTerm){
        //         $query->where('titre' , 'Ilike', )
        //     });
        // }


        return view('client.temoignages.index', compact('temoignages'));
    }

    public function show($id)
    {
        return view('client.temoignages.show');
    }
}
