<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\cities8>
 */
class Cities8Factory extends Factory
{
    protected $table = 'cities8';
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
            'country_id'    => $order++,
        ];
    }
}
