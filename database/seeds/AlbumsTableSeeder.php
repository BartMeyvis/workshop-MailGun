<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class AlbumsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        foreach(range(1,100) as $index)
        {
            $album = new \App\Album();
            $album->name = $faker->sentence(5, true);
            $album->label_id = rand(1,50);
            $album->cover = $faker->imageUrl(200, 200, 'nightlife', true);
            $album->save();

            // per album , link 20 songs
        }
    }
}
