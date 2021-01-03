<?php

namespace Database\Factories;

use App\Models\Comment;
use App\Models\Photo;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class CommentFactory extends Factory
{
    /**
     * Le nom du modèle d'usine correspondant.
     *
     * @var string
     */
    protected $model = Comment::class;

    /**
     * Défini l'état par défaut du modèle.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => User::factory(),// ID de l'utilisateur
            'photo_id' => Photo::factory(), // ID de la photo
            'text' => $this->faker->text,// Le contenu du commentaire
            'comment_id' => null,// Id du commentaire
            'created_at' => now(),// Date de création
            'updated_at' => now(),// Date de mise à jour
        ];
    }
}
