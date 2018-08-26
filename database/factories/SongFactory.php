<?php

use Faker\Generator as Faker;

use App\Domains\Song\Song;

$factory->define(Song::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'lyrics' => $faker->text($maxNbChars = 200),
        'views' => $faker->randomNumber($nbDigits = NULL, $strict = false),
    ];
});
