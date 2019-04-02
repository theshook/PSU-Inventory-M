<?php

use Faker\Generator as Faker;

$factory->define(App\UserLogin::class, function (Faker $faker) {
    return [
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
    ];
});
