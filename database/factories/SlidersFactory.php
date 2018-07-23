<?php

use Faker\Generator as Faker;

$factory->define(App\Slider::class, function (Faker $faker) {
    return [
        "title_ar" => $faker->sentence(),
        "title_en" => $faker->sentence(),
        "image" => $faker->word(), 
    ];
});
