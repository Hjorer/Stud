<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class TagFactory extends Factory
{
    public function definition(): array
    {
        $title = $this->faker->unique()->word();

        return [
            'title' => ucfirst($title),
            'slug' => Str::slug($title),
        ];
    }
}
