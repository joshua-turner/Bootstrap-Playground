<?php

use Faker\Generator as Faker;

/* @var Illuminate\Database\Eloquent\Factory $factory */

$factory->define(App\DashboardValues::class, function (Faker $faker) {
    return [
        //
	    'user_count' => rand(400, 90000),
		'visits_count' => rand(100, 90000),
		'clicks_count' => rand(300, 90000),
		'items_count' => rand(200, 90000),
    ];
});
