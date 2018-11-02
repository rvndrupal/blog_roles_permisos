<?php

use Faker\Generator as Faker;

$factory->define(App\Post::class, function (Faker $faker) {
    return [
        'category_id' => \App\Category::all()->random()->id,
        'title' => $faker->sentence,
        'excerpt' => $faker->paragraph,
        'body' => $faker->paragraph,
        'published_at' => $faker->date(),

    ];
});
