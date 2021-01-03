<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    use HasFactory;

    protected static function booted() {
        static::creating(function ($photo) {
            return !is_null($photo->group->users->find($photo->user_id));
        });
    }
    //Renvoi les commentaires de la photo
    public function comments() {
        return $this->hasMany(Comment::class);
    }
    //Renvoi le groupe auquel appartient photo
    public function group() {
        return $this->belongsTo(Group::class);
    }
    //Renvoi le propriétaire de la photo
    public function owner() {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
    //Renvoi les utilisateurs présent sur la photo
    public function users(){
        return $this->belongsToMany(User::class)->using(PhotoUser::class)->withPivot("id")->withTimestamps();
    }
    //Renvoi les tags utilisés pour la photo
    public function tags(){
        return $this->belongsToMany(Tag::class)->using(PhotoTag::class)->withPivot("id")->withTimestamps();
    }
    
}
 