<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Articles\News;
use Faker\Generator as Faker;

$factory->define(News::class, function (Faker $faker) {
    return [
        'title' => $faker->realText(30),
        'value' => $faker->paragraph(25),
        'intro' => $faker->paragraph(10),
        // 'thumb_location' => $faker->imageUrl(640, 800, 'race'),
    ];
});
