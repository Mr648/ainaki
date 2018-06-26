<?php

use Faker\Generator as Faker;

$factory->define(App\EyeGlass::class, function (Faker $faker) {
    return [
        'name' => 'EyeGlass #' . rand(100, 999),
        'description' => str_random(256),
        'bridgeLength' => random_int(1, 10),
        'frameColor' => str_random(7),
        'frameColorType' => str_random(7),
        'frameShape' => str_random(7),
        'frameWidth' => random_int(1, 10),
        'gender' => random_int(0, 2),
        'handleLength' => random_int(1, 10),
        'hasBox' => false,
        'lensColor' => str_random(7),
        'lensColorType' => str_random(7),
        'lensHeight' => random_int(1, 10),
        'lensWidth' => random_int(1, 10),
        'lensMaterial' => str_random(7),
        'weight' => random_int(1, 10),
    ];
});
