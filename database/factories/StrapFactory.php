<?php

use Faker\Generator as Faker;
use Carbon\Carbon as Time;
$factory->define(App\Strap::class, function (Faker $faker) {
    $id = rand(100,999);
    return [
        'name' => '{"en":"EyeGlass #' . $id . '","fa":"عینک #' . $id . '"}',
        'description' => '{"description":"Sample Description","properties":["Property #1","Property #2","Property #3","Property #4"]}',
        'brand_id' => rand(1,10),
        'category_id' =>rand(1,10),
        'gender' => rand(0, 3),
        'color' => str_random(20),
        'length' => rand(20,50),
        'material' => str_random(20),
        'discountPercentage' => rand(0,100),
        'discountPeriod' => Time::createFromTimestampMs(time())
    ];
});
