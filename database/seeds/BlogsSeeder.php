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
	    'title' => 'Students of Cambodia',
	    'body' => "Coming from a first world country, I was not used to their enthusiasm, their love for learning and their willingness to try really hard in whatever they are tasked to do: they come to school before the gates are opened, reading their textbooks before the sunrises. <br>They are wiling to attempt the strangest things I challenged them to do, including programming games in two weeks. They don't complain that anything is too hard, or too tiring,
	    	or too boring. They are just glad to be given opportunities. <br>I often think that, maybe we will raise the next leader, or a future prime minister, or even a whole cabinet one day from this school... <br>Maybe, just maybe. <br><br>And so this week, we return with Nick filming their graduation ceremony onroute to his assignment.",
	    'videolink' => 'https://player.vimeo.com/external/158148793.hd.mp4?s=8e8741dbee251d5c35a759718d4b0976fbf38b6f&profile_id=119&oauth2_token_id=57447761" type="video/mp4',
	    'image'=>'img/blog/children.jpeg',
	    'owner'=> 2,
	    'published' => TRUE,
	    'publish_date' => "2017/07/28"
	  ]);
    }
}
