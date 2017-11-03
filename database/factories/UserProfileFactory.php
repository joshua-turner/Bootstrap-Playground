<?php

use Faker\Generator as Faker;

/* @var Illuminate\Database\Eloquent\Factory $factory */

$factory->define(App\UserProfile::class, function (Faker $faker) {
    return [
        'phone_number' => $faker->phoneNumber,
        'address_line_1' => $faker->streetAddress,
        'address_line_2' => $faker->secondaryAddress,
        'city' => $faker->city,
        'state' => $faker->state,
        'postal_code' => $faker->postcode,
        'country' => $faker->country,
    ];
});
