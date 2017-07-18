<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $this->call(UsersSeeder::class);
         $this->call(VideosSeeder::class);
         $this->call(BlogsSeeder::class);
         $this->call(CountriesSeeder::class);
         $this->call(TopicsSeeder::class);
    }
}
