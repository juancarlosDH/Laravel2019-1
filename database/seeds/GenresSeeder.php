<?php

use Illuminate\Database\Seeder;

class GenresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('genres')->insert(
        [
          [ 'name' => '3D' ],
          [ 'name' => '4Dx' ],
          [ 'name' => 'El ultimo' ]
        ]
      );
    }
}
