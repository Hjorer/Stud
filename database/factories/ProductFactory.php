<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Status;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ProductFactory extends Factory
{
    public function definition(): array
    {
        $title = fake()->unique()->words(3, true);
        $price = fake()->randomFloat(2, 100, 10000);
        $isSale = fake()->boolean(30); // 30% шанс на скидку

        return [
            'title' => ucfirst($title),
            'slug' => Str::slug($title),
            'content' => fake()->paragraphs(3, true),
            'category_id' => Category::inRandomOrder()->value('id') ?? Category::factory(),
            'status_id' => Status::inRandomOrder()->value('id') ?? Status::factory(),
            'img' => fake()->optional(0.8)->imageUrl(640, 480, 'products'),
            'price' => $price,
            'old_price' => $isSale ? round($price * 1.25, 2) : 0,
            'hit' => fake()->boolean(20) ? 1 : 0,
            'sale' => $isSale ? 1 : 0,
        ];
    }
}
