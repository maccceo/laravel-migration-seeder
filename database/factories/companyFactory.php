<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Company;
use Faker\Generator as Faker;

$factory->define(Company::class, function (Faker $faker) {
    return [
        'name' => $faker -> sentence(2),
        'phone' => $faker -> phoneNumber(),
        'mail' => $faker -> email(),
        'website' => $faker -> word() . ".com"
    ];
});
