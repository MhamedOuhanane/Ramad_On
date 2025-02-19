<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Temoignage extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'titre',
        'description',
        'photo',
        'user_id',
    ];    
    
    public function User()
    {
        return $this->belongsTo(User::class);
    }

    public function Commentaires()
    {
        return $this->hasMany(Commentaire::class);
    }
}
