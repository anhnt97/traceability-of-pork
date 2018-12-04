<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Farm::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'owner' => $faker->name,
        'address' => $faker->address,
    ];
});
