<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'user_id' => $faker->numberBetween($min = 1, $max = 5),
        'title' => $faker->text($maxNbChars = 100),
        'content' => $faker->sentence($nbWords = 10, $variableNbWords = true),
        'thumbnail' => $faker->word,
    ];
});
