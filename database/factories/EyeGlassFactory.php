<?php

use Faker\Generator as Faker;

$factory->define(App\EyeGlass::class, function (Faker $faker) {

    $id = random_int(0,10000);
    return [
        'name' => '{"en":"EyeGlass #' . $id . '","fa":"عینک #' . $id . '"}',
        'description' => '{"description":"Sample Description, Sample Description, Sample Description, Sample Description, Sample Description, Sample Description, Sample Description, Sample Description, Sample Description, Sample Description, Sample Description, Sample Description, Sample Description, Sample Description, Sample Description, Sample Description, Sample Description, Sample Description, Sample Description, Sample Description, Sample Description, Sample Description, Sample Description, Sample Description, Sample Description, Sample Description, Sample Description, Sample Description, Sample Description, Sample Description, Sample Description, Sample Description, Sample Description, Sample Description, Sample Description, Sample Description, Sample Description, Sample Description, Sample Description, Sample Description, Sample Description, Sample Description, Sample Description, Sample Description, Sample Description, Sample Description, Sample Description, Sample Description, Sample Description, Sample Description, ","properties":["Property #1","Property #2","Property #3","Property #4"]}',
        'brand_id' => rand(1,10),
        'category_id' =>rand(1,10),
        'bridgeLength' => random_int(1, 10),
        'frameColor' => str_random(7),
        'frameColorType' => str_random(7),
        'frameShape' => str_random(7),
        'frameWidth' => random_int(1, 10),
        'gender' => random_int(0, 2),
        'price' => floatval(rand(100000, 1500000)),
        'handleLength' => random_int(1, 10),
        'hasBox' => 'جعبه، دستمال، کیف و هاردکاور',
        'lensColor' => str_random(7),
        'lensColorType' => str_random(7),
        'lensHeight' => random_int(1, 10),
        'lensWidth' => random_int(1, 10),
        'lensMaterial' => str_random(7),
        'weight' => random_int(1, 10),
    ];
});
