<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
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
        
        \App\Models\users8::factory(50)->create();
        \App\Models\profiles8::factory(50)->create();
        \App\Models\users8a2::factory(50)->create();
        \App\Models\position8::factory(50)->create();
        /* DB::table('posts')->insert([
				[
					'title' => 'title 1',
					'slug'  => 'post-1',
					'text'  => 'text text text 1',
				],
				[
					'title' => 'title 2',
					'slug'  => 'post-2',
					'text'  => 'text text text 2',
				],
				[
					'title' => 'title 3',
					'slug'  => 'post-3',
					'text'  => 'text text text 3',
				],
		    ]); */
            $this->call([
				Cities8Seeder::class,
				Countries8Seeder::class,
				Users10Seeder::class,
				posts10Seeder::class,
			]);
    }
}
