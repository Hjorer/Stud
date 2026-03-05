<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\roles>
 */
class RolesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => 
            [
                '1' => $this->faker->jobTitle(),
                '2' => $this->faker->jobTitle(),
                '3' => $this->faker->jobTitle(),
            ],
        ];
    }
}
