<?php

use Illuminate\Database\Seeder;
use leapfrog\Country;

class CountriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	  $faker = Faker\Factory::create();

		  $country = Country::create([
		    'country' => 'Cambodia',
		    'description' => 'officially known as the Kingdom of Cambodia (Khmer: ព្រះរាជាណាចក្រកម្ពុជា, Preăh Réachéanachâk Kâmpŭchéa, is a country located in the southern portion of the Indochina Peninsula in Southeast Asia. ',
		    'image' => $faker->imageURL($width = 360, $height = 490)
		  ]);
		  $country = Country::create([
		    'country' => 'Vietnam',
		    'description' => 'is a country in Southeast Asia. The long-form name of the country is the Socialist Republic of Vietnam. The neighboring countries of Vietnam are China, Laos, and Cambodia. Vietnam is one of five remaining countries that believe in communism.',
		    'image' => $faker->imageURL($width = 360, $height = 490)
		  ]);
    }
}
