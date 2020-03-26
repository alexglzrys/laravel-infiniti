<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Customer;
use Faker\Generator as Faker;

$factory->define(Customer::class, function (Faker $faker) {
    return [
        'name'                 => $faker->name,
        'terms_and_conditions' => $faker->numberBetween(0, 1),
        'agency_id'            => $faker->numberBetween(1, 10),
    ];
});
