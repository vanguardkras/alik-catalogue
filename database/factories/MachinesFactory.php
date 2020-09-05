<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Machine;
use Faker\Generator as Faker;

$factory->define(Machine::class, function (Faker $faker) {
    return [
        'name' => $faker->word(),
        'machine_category_id' => rand(1, 8),
        'image' => 'http://alik-group.local/image/page/our-project-1.jpg',
        'price' => rand(1000, 5000),
    ];
});
