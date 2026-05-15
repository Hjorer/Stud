<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use App\Models\users;
use App\Models\Bus;
use App\Models\Route as BusRoute;
use App\Models\Ride;
use Carbon\Carbon;
use Faker\Factory as Faker;
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
    $faker = Faker::create();
    $password = Hash::make('password');
    Users::updateOrCreate(
      ['email' => 'admin@bus.site'],
      ['username' => 'Admin User', 'password' => $password, 'role' => 'admin']
    );

    Users::updateOrCreate(
      ['email' => 'dispatcher@bus.site'],
      ['username' => 'Dispatcher User', 'password' => $password, 'role' => 'dispatcher']
    );

    Users::updateOrCreate(
      ['email' => 'guest@bus.site'],
      ['username' => 'Guest User', 'password' => $password, 'role' => 'guest']
    );
    for ($i = 0; $i < 15; $i++) {
      Bus::create([
        // Генерация буквенно-цифрового кода для регистрационного номера
        'registration_number' => strtoupper($faker->bothify('??-####-??')),
        // Используем генератор слов для названия вымышленной модели
        'model' => ucfirst($faker->word()) . ' Bus ' . $faker->numberBetween(100, 900),
        'seat_count' => $faker->numberBetween(15, 60),
      ]);
    }
    for ($i = 0; $i < 12; $i++) {
      BusRoute::create([
        'route_number' => (string) $faker->numberBetween(100, 999),
        'start_stop' => $faker->city() . ' (' . $faker->secondaryAddress() . ')',
        'end_stop' => $faker->city() . ' (' . $faker->secondaryAddress() . ')',
        'ticket_price' => $faker->randomFloat(2, 10, 250),
      ]);
    }
    $busIds = Bus::pluck('id')->toArray();
    $routeIds = BusRoute::pluck('id')->toArray();
    for ($i = 0; $i < 20; $i++) {
      $startDate = Carbon::instance($faker->dateTimeBetween('now', '+7 days'));
      $endDate = (clone $startDate)->addHours($faker->numberBetween(2, 12));
      Ride::create([
        'ride_number' => strtoupper($faker->bothify('RIDE-####')),
        'bus_id' => $faker->randomElement($busIds),
        'route_id' => $faker->randomElement($routeIds),
        'arrival_start' => $startDate,
        'arrival_end' => $endDate,
      ]);
    }
  }
}
