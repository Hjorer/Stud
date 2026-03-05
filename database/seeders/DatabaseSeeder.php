<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        \App\Models\Countries8::factory(50)->create();
        \App\Models\Post::factory(50)->create();
        \App\Models\User::factory(50)->create();
        \App\Models\Product::factory(50)->create();
        \App\Models\Article::factory(50)->create();
        \App\Models\cities8::factory(50)->create();
        \App\Models\cities8a2::factory(50)->create();
        \App\Models\cities8a3::factory(50)->create();
        \App\Models\roles::factory(50)->create();
        \App\Models\rolesusersid::factory(50)->create();
        
        \App\Models\user8::factory(50)->create();
        \App\Models\profiles8::factory(50)->create();
        \App\Models\users8a2::factory(50)->create();
        \App\Models\position8::factory(50)->create();
    }
}
