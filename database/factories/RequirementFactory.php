<?php

use Faker\Generator as Faker;

$factory->define(App\Requirement::class, function (Faker $faker) {
    return [
        'offer_id' => App\Offer::all()->random()->id,
        'headline' => $faker->paragraph,
        'description' => $faker->paragraph,
    ];
});
