<?php

use Faker\Generator as Faker;

$factory->define(App\AinakiUser::class, function (Faker $faker) {
    return [
        'phone'=>'09'.rand(10,20).rand(0,999).rand(0,99).rand(0,99),
    ];
});
