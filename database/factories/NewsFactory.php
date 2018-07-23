<?php

use Faker\Generator as Faker;

$factory->define(App\News::class, function (Faker $faker) {
    return [
        "title_ar" => $faker->sentence(),
        "title_en" => $faker->sentence(),
        "image" => $faker->image("public/uploads/news"),
        "content_ar" => $faker->paragraphs(rand(2, 10), true),
        "content_en" => $faker->paragraphs(rand(2, 10), true),
    ];
});
