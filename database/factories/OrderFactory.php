<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class OrderFactory extends Factory
{
    public function definition(): array
    {
        $qty = fake()->numberBetween(1, 10);

        return [
            'qty' => $qty,
            'total' => round($qty * fake()->randomFloat(2, 200, 5000), 2),
            'status' => fake()->numberBetween(0, 3),
            'name' => fake()->name(),
            'email' => fake()->safeEmail(),
            'phone' => fake()->phoneNumber(),
            'address' => fake()->address(),
            'note' => fake()->optional()->sentence(),
        ];
    }
}
