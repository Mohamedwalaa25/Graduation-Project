<?php

namespace Database\Factories;

use App\Models\Articlecategorie;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->name(),
            // 'is_new' => fake()->boolean(),
            'home_page' => fake()->boolean(),
            'most_famous' => fake()->boolean(),
            'image_file'    => fake()->imageUrl(),
            'count_views' => fake()->numberBetween(1, 100),
            'articlesubcategorie_id' => Articlecategorie::inRandomOrder()->first()->id,
            'status' => fake()->boolean(),
            'admin_id' => 1,
        ];
    }
}
