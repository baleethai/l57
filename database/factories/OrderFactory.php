<?php

use Faker\Generator as Faker;

$factory->define(App\Order::class, function (Faker $faker) {
    return [
        'user_id'      => 1,
        'order_id'     => $faker->randomDigitNotNull(),
        'published_at' => $faker->dateTime()
    ];
});
