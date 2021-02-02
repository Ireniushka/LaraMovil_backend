<?php

use Faker\Generator as Faker;

$factory->define(App\Applied::class, function (Faker $faker) {
    return [
        'offers_id' => \App\Offer::all()->random()->id,
        'users_id' => \App\User::all()->random()->id,

    ];
});
