<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PhotoUser extends Pivot
{
    use HasFactory; 
    /*Casse tout :
    protected static function booted() {
        //La photo de l'utilisateur ne peut être créé que par un utilisateur appartenant au groupe.
        static::creating(function ($photo) {
            return !is_null($photo->user->groups->find($photo->photo->group));
        });
    }*/
}
