<?php

use Faker\Generator as Faker;

$factory->define(App\Material::class, function (Faker $faker) {
    return [
        "title_ar" => $faker->sentence(),
        "title_en" => $faker->sentence(),
        "image" => $faker->word(),
        "file" => $faker->word(),
        "video" => $faker->word(),
        "content_ar" => $faker->paragraphs(rand(2, 10), true),
        "content_en" => $faker->paragraphs(rand(2, 10), true),
        "course_id" => factory(App\Course::class)->create()->id
    ];
});
