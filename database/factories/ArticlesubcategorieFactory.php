<?php

namespace Database\Factories;

use App\Models\Articlecategorie;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Articlesubcategorie>
 */
class ArticlesubcategorieFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'articlecategorie_id' => Articlecategorie::inRandomOrder()->first()->id,
            'image_name' => fake()->image(),
            'descreption' => fake()->sentence(20),
        ];
    }
}
