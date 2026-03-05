<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\rolesusersid>
 */
class rolesusersidFactory extends Factory
{

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        static $order = 1;
        static $order1 = 1;
        return [
            'user_id' => $order++, 
            'roles_id' => $order1++,
        ];
    }
}
