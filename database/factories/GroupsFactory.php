<?php

use Faker\Generator as Faker;

$factory->define(App\Group::class, function (Faker $faker) {
    return [
        "title" => $faker->word(),
        "permissions" => $faker->paragraphs(rand(2, 10), true),
    ];
});
