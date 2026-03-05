<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\profiles8>
 */
class Profiles8Factory extends Factory
{
    protected $table = 'profiles8';
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    
    public function definition(): array
    {
        static $order = 1;
        return [
            'name' => $this->faker->firstName(),
            'surname'  => $this->faker->lastName(),
            'email'      => $this->faker->unique()->safeEmail(),
            'user_id' => $order++,
        ];
    }
}
