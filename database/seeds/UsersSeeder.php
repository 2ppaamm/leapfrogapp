<?php

use Illuminate\Database\Seeder;
use leapfrog\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$faker = Faker\Factory::create();

		for ($i = 0; $i < 20; $i++)
		{
		  $user = User::create([
		    'name' => $faker->userName,
		    'email' => $faker->email,
		    'password' => $faker->word,
		    'is_admin'=>FALSE
		  ]);
		}
    }
}
