<?php

namespace Database\Factories;

use App\Models\Tag;
use Illuminate\Database\Eloquent\Factories\Factory;

class TagFactory extends Factory
{
    /**
     * Le nom du modèle d'usine correspondant.
     *
     * @var string
     */
    protected $model = Tag::class;

    /**
     * Défini l'état par défaut du modèle.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->word(), //Nom du tag
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
