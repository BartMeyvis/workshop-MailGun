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
         $this->call(ArtistSeeder::class);
         $this->call(SongsTableSeeder::class);
         $this->call(LabelsTableSeeder::class);
         $this->call(AlbumsTableSeeder::class);
    }
}

