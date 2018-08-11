<?php

use Faker\Generator as Faker;
use Carbon\Carbon as Time;
$factory->define(App\Strap::class, function (Faker $faker) {
    return [
        'name' => 'Strap #' . rand(100, 999),
        'gender' => rand(0, 3),
        'color' => str_random(20),
        'length' => rand(20,50),
        'material' => str_random(20),
        'description' => str_random(20),
        'discountPercentage' => rand(0,100),
        'discountPeriod' => Time::createFromTimestampMs(time())
    ];
});
