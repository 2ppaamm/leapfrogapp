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

		for ($i = 0; $i < 20; $i++)
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
