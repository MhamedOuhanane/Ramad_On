<?php

namespace Database\Factories;

use App\Models\Temoignage;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Commentaire>
 */
class CommentaireFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'commentaire' => $this->faker->paragraph,
            'user_id'=> $this->faker->randomElement(User::pluck('id')->toArray()),
            'temoignage_id' => $this->faker->randomElement(Temoignage::pluck('id')->toArray()),
        ];
    }
}
