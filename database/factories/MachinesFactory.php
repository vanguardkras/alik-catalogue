<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Machine;
use Faker\Generator as Faker;

$factory->define(Machine::class, function (Faker $faker) {
    return [
        'name' => $faker->word(),
        'machine_category_id' => rand(1, 8),
        'image' => $faker->imageUrl(320, 240, 'transport'),
    ];
});
