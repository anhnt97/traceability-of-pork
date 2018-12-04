<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Pig::class, function (Faker $faker) {
    $status = ['Khỏe mạnh', 'Đang bị bệnh', 'Đang cách ly', 'Đã chết'];
    return [
        'batch_id' => rand(1, 8),
        'weight' => rand(10, 100),
        'status' => $status[rand(0,3)],
    ];
});
