<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Recette extends Model
{
    protected $fillable = [
        'title',
        'description',
        'photo',
        'temps_prépare',
        'user_id',
        'categorie_id',        
    ];    
    
    public function User()
    {
        return $this->belongsTo(User::class);
    }

    public function Categorie()
    {
        return $this->belongsTo(Categorie::class);
    }
}
