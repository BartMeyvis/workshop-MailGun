<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class LabelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        foreach(range(1,50) as $index)
        {
            $labels = new \App\Label();
            $labels->name = $faker->name();
            $labels->save();
        }
    }
}
