<?php

use Illuminate\Database\Seeder;
use leapfrog\Blog;

class BlogsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $faker = Faker\Factory::create();

	  $blog = Blog::create([
	    'title' => 'Children of Cambodia',
	    'body' => "Coming from a first world country, I was not used to their enthusiasm, their love for learning and their willingness to try really in whatever they are tasked to do: they come to school before the gates are opened, reading their textbooks before the sunrises. They are wiling to try the most strange things I asked them to do, include learning how to program a game in two weeks. They don't complain that anything is too hard, or too tiring,
	    	or too boring. They are just glad to be given opportunities. I often that maybe we will raise the next leader, or a future prime minister, or even a whole cabinet one day from this school... Maybe, just maybe.",
	    'videolink' => 'https://player.vimeo.com/external/158148793.hd.mp4?s=8e8741dbee251d5c35a759718d4b0976fbf38b6f&profile_id=119&oauth2_token_id=57447761" type="video/mp4',
	    'image'=>$faker->imageUrl($width = 640, $height = 480),
	    'owner'=> 1,
	    'published' => $faker->numberBetween(0,1),
	    'publish_date' => $faker->date
	  ]);


		for ($i = 0; $i < 2; $i++)
		{
		  $blog = Blog::create([
		    'title' => $faker->realText($maxNbChars = 30, $indexSize = 2),
		    'body' => $faker->realText($maxNbChars = 200, $indexSize = 2),
		    'videolink' => 'https://player.vimeo.com/external/158148793.hd.mp4?s=8e8741dbee251d5c35a759718d4b0976fbf38b6f&profile_id=119&oauth2_token_id=57447761" type="video/mp4',
		    'image'=>$faker->imageUrl($width = 640, $height = 480),
		    'owner'=> $faker->numberBetween(1, 20),
		    'published' => $faker->numberBetween(0,1),
		    'publish_date' => $faker->date
		  ]);
		}
    }
}
