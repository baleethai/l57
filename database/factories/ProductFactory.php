<?php

use Faker\Generator as Faker;

$factory->define(App\Product::class, function (Faker $faker) {
    return [
        'name'         => $faker->name,
        'slug'         => $faker->name,
        'description'  => $faker->text,
        'price'        => 100.00,
        'qty'          => $faker->randomDigitNotNull(),
        'published_at' => $faker->dateTime()
    ];
});
            