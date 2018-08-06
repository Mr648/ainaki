<?php

use Faker\Generator as Faker;

$factory->define(App\Comment::class, function (Faker $faker) {
    return [
        'rating' => random_int(0,5),
        'comment' => str_random(120),
    ];

});
