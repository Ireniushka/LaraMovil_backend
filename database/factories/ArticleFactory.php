<?php

use Faker\Generator as Faker;

$factory->define(App\Article::class, function (Faker $faker) {
    return [
        'cicles_id' => App\Cicle::all()->random()->id,
        'title' => $faker->sentence,
        'img' => $faker->sentence,//?????
        'description' => $faker->paragraph,
    ];
});
