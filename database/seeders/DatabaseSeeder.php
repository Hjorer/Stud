<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Order;
use App\Models\Product;
use App\Models\Status;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        User::factory(rand(1, 10))->create();
        Category::factory(rand(1, 10))->create();
        Status::factory(rand(1, 10))->create();
        Product::factory(rand(1, 10))->create();
        Order::factory(rand(1, 10))->create();
        \App\Models\Tag::factory(15)->create();
        \App\Models\Post::factory(20)->create();
    }
}
