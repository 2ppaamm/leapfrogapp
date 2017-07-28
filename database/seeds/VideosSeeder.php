<?php

use Illuminate\Database\Seeder;
use leapfrog\Video;

class VideosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$faker = Faker\Factory::create();

		for ($i = 0; $i < 2; $i++)
		{
		  $video = Video::create([
		    'title' => $faker->realText($maxNbChars = 30, $indexSize = 2),
		    'synopsis' => $faker->realText($maxNbChars = 200, $indexSize = 2),
		    'videolink' => 'https://player.vimeo.com/external/19816776.hd.mp4?s=4500615818e69953e6bc9a436c59e982da2608cd&profile_id=113',
		    'poster'=>$faker->imageUrl($width = 640, $height = 480),
		    'owner'=> $faker->numberBetween(1, 20),
		    'approver' => $faker->numberBetween(1,20),
		    'published' => $faker->numberBetween(0,1),
		    'publish_date' => $faker->date
		  ]);
		}
    }
}
