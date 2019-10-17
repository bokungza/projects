<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Orders;
use Faker\Generator as Faker;

$factory->define(Orders::class, function (Faker $faker) {
    return [
        
        'price' =>  $faker->numberBetween(0, 10000),
        'status' =>$faker->text(10)
    ];
});
