<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "image" => fake()->imageUrl(),
            "title" => fake()->sentence(2),
            "description" => fake()->paragraph(2),
            "sizes" => [
                [
                    "id" => "1",
                    "name" => fake()->word(),
                    "price" => random_int(50, 150),
                ],
                [
                    "id" => "2",
                    "name" => fake()->word(),
                    "price" => random_int(50, 150),
                ],
                [
                    "id" => "3",
                    "name" => fake()->word(),
                    "price" => random_int(50, 150),
                ],
            ],
        ];
    }
}
