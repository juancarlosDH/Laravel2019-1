<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Genre;
use Faker\Generator as Faker;

$factory->define(Genre::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
    ];
});
