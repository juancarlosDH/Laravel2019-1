<?php

use Illuminate\Database\Seeder;
use App\Genre;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(Genre::class)->times(10)->create();
        //$this->call(GenresSeeder::class);
    }
}
