<?php

use Faker\Generator as Faker;

$factory->define(App\Brand::class, function (Faker $faker) {

    $id = random_int(0, 10000);
    return [
        //
        'name' => '{"en":"Brand #' . $id . '","fa":"برند #' . $id . '"}',
        'country' => str_random(5),
        'description' => str_random(128)
    ];
});
