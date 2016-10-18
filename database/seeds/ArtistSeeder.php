<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ArtistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        foreach(range(1,200) as $index)
        {
            $artist = new \App\Artist();
            $artist->name = $faker->name();
            $artist->save();
        }
    }
}
