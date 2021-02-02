<?php

use Faker\Generator as Faker;

$factory->define(App\Requirement::class, function (Faker $faker) {
    return [
        'offers_id' => App\Offer::all()->random()->id,
        'headline' => $faker->paragraph,
        'description' => $faker->paragraph,
    ];
});
