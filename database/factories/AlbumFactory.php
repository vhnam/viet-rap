<?php

use Faker\Generator as Faker;

use App\Domains\Album\Album;

$factory->define(Album::class, function (Faker $faker) {
    $name = $faker->name;
    $alias = strtolower($name);
    $alias = str_replace(' ', '-', $alias);

    return [
        'name' => $name,
        'alias' => $alias,
        'coverImage' => $faker->imageUrl($width = 640, $height = 480),
        'artist_id' => 1
    ];
});
