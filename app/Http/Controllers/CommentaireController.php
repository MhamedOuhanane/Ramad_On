<?php

namespace App\Http\Controllers;

use App\Models\Commentaire;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentaireController extends Controller
{
    public function store(Request $request, $id)
    {
        $request->validate([
            'commentaire' => 'required',
        ]);
        
        Commentaire::create([
            'commentaire' => $request->commentaire,
            'user_id' => Auth::id(),
            'temoignage_id' => $id,
        ]);
        return redirect("/temoignages/{$id}");
    }
}
