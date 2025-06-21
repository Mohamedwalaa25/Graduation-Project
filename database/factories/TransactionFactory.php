<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Package;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Transaction>
 */
class TransactionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */ public function definition()
    {
        return [
            'user_id' => User::inRandomOrder()->first()->id,
            'package_id' => Package::inRandomOrder()->first()->id,
            'amount' => fake()->randomFloat(2, 10, 1000),
            'coins' => fake()->numberBetween(100, 10000),
            'status' => 'success',
            'gateway' => 'paypal',
            'currency' => 'EGP',
        ];
    }
}
