<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Pay;
use Faker\Generator as Faker;

$factory->define(Pay::class, function (Faker $faker) {
    return [
        'orderid' => $faker->numberBetween(1000000000, 9999999999),
        'bank' => $faker->sentence(8),
        
        //'paystime' => $faker-> random(),

        'firstname' => $faker->text(50),
        'lastname' => $faker->text(50),
        'cost' => $faker->numberBetween(100, 10000)
    ];
});
