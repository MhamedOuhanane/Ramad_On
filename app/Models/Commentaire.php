<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Commentaire extends Model
{
    protected $fillable = [
        'commentaire',
        'user_id',
        'temoignage_id',
    ];

    public function User()
    {
        return $this->belongsTo(User::class);
    }

    public function Temoignages()
    {
        return $this->belongsTo(Temoignage::class);
    }
}
