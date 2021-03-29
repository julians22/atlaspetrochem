<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Faq;
use Faker\Generator as Faker;

$factory->define(Faq::class, function (Faker $faker) {
    return [
        'answer_text' => $faker->paragraph(3, true),
        'question_text' => $faker->paragraph(2, true) . '?'
    ];
});
