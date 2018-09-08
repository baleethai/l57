<?php

use Faker\Generator as Faker;

$factory->define(App\Category::class, function (Faker $faker) {
    return [
        'name'         => $faker->name,
        'slug'         => $faker->name,
        'description'  => $faker->text,
        'published_at' => $faker->dateTime()
    ];
});
