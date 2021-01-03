<?php

namespace Database\Factories;

use App\Models\Group;
use App\Models\GroupUser;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class GroupUserFactory extends Factory
{
    /**
     * Le nom du modèle d'usine correspondant.
     *
     * @var string
     */
    protected $model = GroupUser::class;

    /**
     * Défini l'état par défaut du modèle.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => User::factory(), // ID de l'utilisateur
            'group_id' => Group::factory(), // ID du groupe
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
 