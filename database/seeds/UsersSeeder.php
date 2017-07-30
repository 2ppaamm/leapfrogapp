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

		  $user = User::create([
		    'name' => 'Nick Manley',
		    'email' => 'nick@leap-frogger.com',
		    'password' => bcrypt('leapleap'),
		    'is_admin'=>TRUE
		  ]);

		  $user = User::create([
		    'name' => 'Pamela Lim',
		    'email' => 'pam@leap-frogger.com',
		    'password' => bcrypt('leapleap'),
		    'is_admin'=>TRUE
		  ]);

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
