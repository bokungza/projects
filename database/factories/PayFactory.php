<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Pay;
use Faker\Generator as Faker;

$factory->define(Pay::class, function (Faker $faker) {
    return [
        'orderid' => $faker->numberBetween(1000000000, 9999999999),
        'bank' => $faker->sentence(8),
        'day' => $faker->numberBetween(1, 31),
        'month' => $faker->numberBetween(1, 12),
        'year' => $faker->numberBetween(2018, 2019),
        'hour' => $faker->numberBetween(0, 23),
        'minute' => $faker->numberBetween(0, 59),
        'payerfirstname' => $faker->text(50),
        'payerlastname' => $faker->text(50),
        'amount' => $faker->numberBetween(500, 10000)
    ];
});
