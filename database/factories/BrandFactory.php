<?php

use Faker\Generator as Faker;

$factory->define(App\Brand::class, function (Faker $faker) {
    return [
        //
        'name' => str_random(5),
        'country' => str_random(5),
        'description' => str_random(256)
    ];
});
