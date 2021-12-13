<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder {
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run() {
    // Clear the users table first
    User::truncate();

    $faker = \Faker\Factory::create();

    // make sure everyone has the same password
    $password = Hash::make('toptal');

    User::create([
      'name' => 'Administrator',
      'email' => 'admin@test.com',
      'password' => $password,
    ]);

    // generate a few dozen users for our app
    for ($i = 0; $i < 10; $i++) {
      User::create([
        'name' => $faker->name,
        'email' => $faker->email,
        'password' => $password,
      ]);
    }
  }
}
