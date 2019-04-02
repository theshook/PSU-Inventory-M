<?php

use Faker\Generator as Faker;

$factory->define(App\User::class, function (Faker $faker) {
    return [
        'user_id' => $faker->randomNumber($nbDigits = null, $strict = false),
        'user_fname' => $faker->firstName(),
        'user_lname' => $faker->lastName(),
        'user_mname' => $faker->shuffle('hello word'),
    ];
});
