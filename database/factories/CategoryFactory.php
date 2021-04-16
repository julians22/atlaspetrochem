<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Category;
use Faker\Generator as Faker;

$factory->define(Category::class, function (Faker $faker) {
    return [
        'name' => $faker->catchPhrase,
        'description' => $faker->sentence(),
        'main_category_id' => 1
    ];
});
