<?php

namespace Database\Factories;

use App\Models\Group;
use Illuminate\Database\Eloquent\Factories\Factory;

class GroupFactory extends Factory
{
    /**
     * Le nom du modèle d'usine correspondant.
     *
     * @var string
     */
    protected $model = Group::class;

    /**
     * Défini l'état par défaut du modèle.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->word, // Nom du groupe
            'description' => $this->faker->sentence(), //Description du groupe
            'created_at' => now(),// Date de création
            'updated_at' => now(),// Date de mise à jour
        ];
    }
}
