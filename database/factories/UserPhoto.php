<?php

use Faker\Generator as Faker;

$factory->state(App\Photo::class,  'avatar',function (Faker $faker) {
    return [
        'path' => 'images/avatar' . rand(1, 2) . '.png'
    ];
});
