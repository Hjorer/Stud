<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\user8>
 */
class User8Factory extends Factory
{
    protected $table = 'users8a2';
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'login' => $this->faker->firstName(),
            'password'=>bcrypt('password'),
        ];
    }
}
