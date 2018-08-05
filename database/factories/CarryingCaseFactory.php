<?php

use Faker\Generator as Faker;
use Carbon\Carbon as Time;

$factory->define(App\CarryingCase::class, function (Faker $faker) {
    return [

        'gender' => rand(0, 2),
        'name' => 'CC #' . rand(100, 999),
        'color' => str_random(10),
        'material' => str_random(10),
        'width' => rand(0, 10),
        'height' => rand(0, 10),
        'description' => str_random(100),
        'discountPercentage' => rand(0, 100),
        'discountPeriod' => Time::createFromTimestampMs(time()),
    ];
});
