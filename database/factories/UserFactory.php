<?php

use Faker\Generator as Faker;


$factory->define(App\User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'surname' => $faker->firstName,
        'email' => $faker->unique()->safeEmail,
        'activated'=>$faker->boolean,
        'email_verified_at' => now(),
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'remember_token' => str_random(10),
        'cicle_id' => App\Cicle::all()->random()->id,
        'num_offer_aplied' => $faker->randomDigit,
    ];
});
