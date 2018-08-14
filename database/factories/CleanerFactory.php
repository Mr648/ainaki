<?php

use Faker\Generator as Faker;
use Carbon\Carbon as Time;


$factory->define(App\Cleaner::class, function (Faker $faker) {
	return [
		'name' => 'Cleaner #' . rand(100, 999),
		'description' => str_random(100),
		'price' => floatval(rand(10, 20)),
		'volume' => rand(0, 10),
		'healthLicence' => str_random(20),
		'discountPercentage' => rand(0, 100),
		'discountPeriod' => Time::createFromTimestampMs(time()),
	];
});