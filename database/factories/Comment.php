<?php

use Faker\Generator as Faker;

$factory->define(App\Comment::class, function (Faker $faker) {
    return [
        'ainaki_user_id' => random_int(1,10),
        'rating' => random_int(0,5),
        'comment' => str_random(120),
    ];

});
