<?php

use Faker\Generator as Faker;

$factory->define(App\Offer::class, function (Faker $faker) {
    return [
        'cicle_id' => App\Cicle::all()->random()->id,
        'headline' => $faker->paragraph,
        'description' => $faker->paragraph,
        'date_max' => $faker->date,
    ];
});
