<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\portfolio>
 */
class PortfolioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        /* CREO VALORI FAKE */
        return [
            'title' => fake()->text(20),
            'content' => fake()->paragraphs(15, true),
            'is_published' => fake()->boolean(),
            'image' => fake()->image(null, 350, 350),
        ];
    }
}