<?php

namespace Database\Factories;

use App\Models\Categorie;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Recette>
 */
class RecetteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'titre' => $this->faker->sentence,
            'description' => $this->faker->paragraph,
            'photo' => $this->faker->imageUrl(),
            'temps_prépare' => $this->faker->time,
            'user_id' => $this->faker->randomElement(User::pluck('id')->toArray()),
            'categorie_id' => $this->faker->randomElement(Categorie::pluck('id')->toArray()), 
        ];
    }
}
