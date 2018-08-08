<?php

use Faker\Generator as Faker;

$factory->define(App\Warranty::class, function (Faker $faker) {
    return [
        'company'=>'Company #'.rand(100,999),
        'period'=>str_random(15),
    ];
});
