<?php

use Faker\Generator as Faker;
use App\Domains\Artist\Artist;

$factory->define(Artist::class, function (Faker $faker) {
    $name = $faker->name;

    return [
        'name' => $name,
        'profile' => $faker->text($maxNbChars = 200),
        'alias' => getAlias($name),
        'coverImage' => $faker->imageUrl($width = 640, $height = 480),
        'artistImage' => $faker->imageUrl($width = 640, $height = 480),
    ];
});

function getAlias($name) {
    $newName = strtolower($name);
    $newName = str_replace(' ', '-', $newName);
    return $newName;
}
