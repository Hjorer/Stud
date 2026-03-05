<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\users8a2>
 */
class Users8a2Factory extends Factory
{
    protected $table = 'users8a2s';
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        static $order = 1;
        static $order1 = 1;
        static $order2 = 1;
        return [
            'name' => $this->faker->unique()->userName(),
            'country_id'    => $order++,
            'city_id' => $order1++,
            'position_id' => $order2++,
            'population' => $this->faker->numberBetween(10000, 10000000),
        ];
    }
}
