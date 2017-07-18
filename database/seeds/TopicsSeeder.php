<?php

use Illuminate\Database\Seeder;
use leapfrog\Topic;

class TopicsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	  $faker = Faker\Factory::create();

		  $topic = Topic::create([
		    'topic' => 'Finance',
		    'description' => 'Commercial transactions can either build or strip wealth',
		    'image' => $faker->imageURL($width = 360, $height = 490)
		  ]);
		  $topic = Topic::create([
		    'topic' => 'Education',
		    'description' => 'Education is only weapon in which we can use to change the world. ~ Nelson Mandela',
		    'image' => $faker->imageURL($width = 360, $height = 490)
		  ]);
		  $topic = Topic::create([
		    'topic' => 'Housing',
		    'description' => 'Everybody has a dream to own a home.',
		    'image' => $faker->imageURL($width = 360, $height = 490)
		  ]);
		  $topic = Topic::create([
		    'topic' => 'Transportation and Technology',
		    'description' => 'Whether you own a car or take a bus, in the end, everyone is a pedestrain.',
		    'image' => $faker->imageURL($width = 360, $height = 490)
		  ]);
		  $topic = Topic::create([
		    'topic' => 'Food',
		    'description' => 'Food is not rationale. It is culture, habit, craving and identity. ~ Jonathan Safran Foer',
		    'image' => $faker->imageURL($width = 360, $height = 490)
		  ]);
		  $topic = Topic::create([
		    'topic' => 'Women in Society',
		    'description' => 'Many women do noble things, but you surpass them all.',
		    'image' => $faker->imageURL($width = 360, $height = 490)
		  ]);
    }
}
