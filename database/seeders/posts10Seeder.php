<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
class posts10Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 50; $i++) {
            DB::table('posts10')->insert([
                'title'      => Str::random(10),
                'slug'     => Str::random(10),
                'likes'            => rand(0, 100000),
            ]);
        }
    }
}
