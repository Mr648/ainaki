<?php

use Faker\Generator as Faker;

$factory->define(App\Tag::class, function (Faker $faker) {
    return [
        'tag'=> 'Tag #' . random_int(10,1000),
    ];
});
