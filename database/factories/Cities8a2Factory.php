<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\cities8a2>
 */
class Cities8a2Factory extends Factory
{
    protected $table = 'cities8a2';
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        static $order = 1;
        return [
            'name' => $this->faker->city(),
            'population' => $this->faker->numberBetween(10000, 200000),
            'country_id'    => $order++,
        ];
    }
}
