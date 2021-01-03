<?php

namespace Database\Factories;

use App\Models\Photo;
use App\Models\PhotoUser;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class PhotoUserFactory extends Factory
{
    /**
     * Le nom du modèle d'usine correspondant.
     *
     * @var string
     */
    protected $model = PhotoUser::class;

    /**
     * Défini l'état par défaut du modèle.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'photo_id' => Photo::factory(), // ID de la photo
            'user_id' => User::factory(),// ID de l'utilisateur
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
