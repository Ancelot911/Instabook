<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * Les attributs attribuables en masse.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * Les attributs qui doivent être masqués pour les tableaux.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Les attributs qui doivent être convertis en types natifs.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Renvoi les commentaires que l'utilisateur a mit.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
     public function comments()
     {
         return $this->hasMany(Comment::class);
     }

    /**
     *  Renvoi les photos que l'utilisateur a mit.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
     public function photos()
     {
         return $this->hasMany(Photo::class);
     }

      /**
     *  Renvoi les photos sur lesquelles l'utilisateur apparaît.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
     public function photosAppearance()
     {
        return $this->belongsToMany(Photo::class)->using(PhotoUser::class)->withPivot("id")->withTimestamps();;

     }

      /**
     *  Renvoi les groupes auxquels l'utilisateur appartient.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
     public function groups()
     {
        return $this->belongsToMany(Group::class)->using(GroupUser::class)->withPivot("id")->withTimestamps();;

     }
}
