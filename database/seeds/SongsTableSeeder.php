<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class SongsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        foreach(range(1,2000) as $index)
        {
            $song = new \App\Song();
            $song->artist_id = rand(1,200);
            $song->name = $faker->sentence(6, true);
            $song->save();
        }
    }
}
