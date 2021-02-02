<?php

use Faker\Generator as Faker;

$factory->define(App\Article::class, function (Faker $faker) {
    return [
        'cicle_id' => App\Cicle::all()->random()->id,
        'title' => $faker->sentence,
        'img' => $faker->image,//?????
        'description' => $faker->paragraph,
    ];
});
