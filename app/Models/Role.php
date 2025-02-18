<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    private $fillable = [
        'id',
        'role'
    ];

    public function User(){
        return $this->hasMany(User::class);
    }
}
