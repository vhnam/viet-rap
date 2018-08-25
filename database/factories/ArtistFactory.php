<?php

use Faker\Generator as Faker;

use App\Domains\Artist\Artist;

$factory->define(Artist::class, function (Faker $faker) {
    $name = $faker->name;
    $alias = strtolower($name);
    $alias = str_replace(' ', '-', $alias);

    return [
        'name' => $name,
        'profile' => $faker->text($maxNbChars = 200),
        'alias' => $alias,
        'coverImage' => $faker->imageUrl($width = 640, $height = 480),
        'artistImage' => $faker->imageUrl($width = 640, $height = 480),
    ];
});
