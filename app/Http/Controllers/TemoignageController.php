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
        $temoignages = Temoignage::with('user')->withCount('Commentaires');
        
        // if ($request->has('SearchTemoi') && $request->search != '') {
        //     $searchTerm = $request->search;

        //     $temoignages->where(function($query) use ($searchTerm){
        //         $query->where('titre' , 'Ilike', "%".$searchTerm."%");
        //     });
        // }
        
        $temoignages =$temoignages->paginate(6);
        return view('client.temoignages.index', compact('temoignages'));
    }

    public function show($id)
    {
        return view('client.temoignages.show');
    }
}
