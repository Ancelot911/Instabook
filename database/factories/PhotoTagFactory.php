<?php

namespace Database\Factories;

use App\Models\Photo;
use App\Models\PhotoTag;
use App\Models\Tag;
use Illuminate\Database\Eloquent\Factories\Factory;

class PhotoTagFactory extends Factory
{
    /**
     * Le nom du modèle d'usine correspondant.
     *
     * @var string
     */
    protected $model = PhotoTag::class;

    /**
     * Défini l'état par défaut du modèle.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'photo_id' => Photo::factory(), // ID de la photo
            'tag_id' => Tag::factory(), // ID du tag
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
