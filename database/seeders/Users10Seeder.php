<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class Users10Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 50; $i++) {
            DB::table('users10')->insert([
                'name'      => Str::random(10),
                'email'          => Str::random(10) . '@gmail.com',
                'password'       => Hash::make('12345'),
                'age'            => rand(18, 60),
                'salary'            => rand(18000, 60000),
            ]);
        }
    }
}
