<?php

use Faker\Generator as Faker;
use Carbon\Carbon as Time;


$factory->define(App\Cleaner::class, function (Faker $faker) {

    $id = rand(100, 999);
	return [
		'name' => '{"en":"Cleaner #' . $id . '","fa":"محلول شوینده #' . $id . '"}',
		'description' =>  '{"description":"Sample Description","properties":["Property #1","Property #2","Property #3","Property #4"]}',
        'brand_id' => rand(1,10),
        'category_id' =>rand(1,10),
		'price' => floatval(rand(10, 20)),
		'volume' => rand(0, 10),
		'healthLicence' => str_random(20),
		'discountPercentage' => rand(0, 100),
		'discountPeriod' => Time::createFromTimestampMs(time()),
	];
});
