<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected static function booted() {
        //Le commentaire ne peut être créé que par un utilisateur appartenant au groupe.
        static::creating(function ($comment) {
            return !is_null($comment->photo->group->users->find($comment->user_id));
        });
    }

    /**
     * Renvoi l'utilisateur à qui appartient la photo
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
     public function photo()
     {
         return $this->belongsTo(Photo::class);
     }

    /**
     * Renvoi l'utilisateur qui a mit le commentaire
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
     public function user()
     {
         return $this->belongsTo(User::class);
     }

     /**
     * Renvoi les réponses des utilisateurs au commentaire
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function replyTo()
     {
        return $this->belongsTo(Comment::class,'comment_id','id');
     }

     /**
     * Renvoi les commentaires qui ont été publiés
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function replies()
     {
         return $this->hasMany(Comment::class);
     }
}
