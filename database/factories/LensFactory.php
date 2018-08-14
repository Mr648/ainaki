<?php

use Faker\Generator as Faker;
use Carbon\Carbon as Time;


$factory->define(App\Lens::class, function (Faker $faker) {
    $id = rand(100,999);
    return [
        'name' => '{"en":"Lens #' . $id . '","fa":"لنز #' . $id . '"}',
        'description' => '{"description":"Sample Description","properties":["Property #1","Property #2","Property #3","Property #4"]}',
        'BC' => rand(0, 10),
        'DIA' => rand(0, 10),
        'brand_id' => rand(1,10),
        'category_id' =>rand(1,10),
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
