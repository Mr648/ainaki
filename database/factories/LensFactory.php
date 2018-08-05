<?php

use Faker\Generator as Faker;
use Carbon\Carbon as Time;


$factory->define(App\Lens::class, function (Faker $faker) {
    return [
        'name' => 'Lens #' . rand(100, 999),
        'description' => str_random(100),
        'BC' => rand(0, 10),
        'DIA' => rand(0, 10),
        'healthLicence' => str_random(20),
        'color' => str_random(10),
        'gender' => rand(0, 10),
        'quantityInPack' => str_random(20),
        'usePeriod' => str_random(20),
        'waterContent' => rand(0, 1),
        'discountPercentage' => rand(0, 100),
        'discountPeriod' => Time::createFromTimestampMs(time()),
        'productionDate' => Time::createFromTimestampMs(time()),
    ];
});
