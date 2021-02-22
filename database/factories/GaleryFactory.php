<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Articles\Galery;
use Faker\Generator as Faker;

$factory->define(Galery::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(4)
    ];
});
