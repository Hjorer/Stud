<?php

namespace Database\Factories;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    protected $table = 'products';
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->firstName(),
            'price' => fake()->unique(true)->numberBetween(250,1000),
            'quantity' => fake()->unique(true)->numberBetween(0,15),
            'is_active'=>$this ->faker->boolean(),
            /* 'options'   => [
                'material' => $this->faker->word(),
                'weight'   => $this->faker->numberBetween(100, 5000) . 'g',
                'tags'     => $this->faker->words(3),
            ], */
        ];
    }
}
