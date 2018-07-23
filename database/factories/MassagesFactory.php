<?php

use Faker\Generator as Faker;

$factory->define(App\Message::class, function (Faker $faker) {
    return [
        "name" => $faker->name(),
        "email" => $faker->safeEmail(), 
        "message" => $faker->paragraphs(rand(2, 10), true), 
    ];
});
