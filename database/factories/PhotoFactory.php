<?php

use Faker\Generator as Faker;

$factory->define(App\Photo::class, function (Faker $faker) {
    return [
        'path' => 'images/g' . rand(1, 7) . '.png'
    ];
});
