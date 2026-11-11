<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class StatusFactory extends Factory
{
    public function definition(): array
    {
        $icons = ['fa-check', 'fa-clock', 'fa-star', 'fa-fire', 'fa-box', 'fa-truck'];

        return [
            'title' => ucfirst(fake()->word()),
            'icon' => fake()->randomElement($icons),
        ];
    }
}
