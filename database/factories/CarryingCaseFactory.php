<?php

use Faker\Generator as Faker;
use Carbon\Carbon as Time;

$factory->define(App\CarryingCase::class, function (Faker $faker) {
    $id = rand(100,999);
    return [
        'name' => '{"en":"Carrying Case #' . $id . '","fa":"محافظ #' . $id . '"}',
        'description' => '{"description":"Sample Description","properties":["Property #1","Property #2","Property #3","Property #4"]}',
        'brand_id' => rand(1,10),
        'category_id' =>rand(1,10),
        'gender' => rand(0, 2),
        'color' => str_random(10),
        'material' => str_random(10),
        'width' => rand(0, 10),
        'height' => rand(0, 10),
        'discountPercentage' => rand(0, 100),
        'discountPeriod' => Time::createFromTimestampMs(time()),
    ];
});
