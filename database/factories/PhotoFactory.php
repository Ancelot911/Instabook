<?php

namespace Database\Factories;

use App\Models\Group;
use App\Models\Photo;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class PhotoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Photo::class;

    /**
     * Le nom du modèle d'usine correspondant.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->word(),// Titre de la photo
            'description' => $this->faker->sentence(),// Description de la photo
            'file' => $this->faker->word() . ".png", //Piéce jointe
            'date' => null, // Dete de publication
            'width' => rand(0,5000),//Largeur de le photo
            'height' => rand(0,5000),//Hauteur de la photo
            'resolution' => null, //Résolution de la photo
            'user_id' => User::factory(), // ID de l'utilisateur
            'group_id' => Group::factory(), // ID du groupe
            'created_at' => null,
            'updated_at' => null,
        ];
    }
}
