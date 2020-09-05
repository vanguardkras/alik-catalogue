<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Parameter;
use Faker\Generator as Faker;

$factory->define(Parameter::class, function (Faker $faker) {
    return [
        'machine_id' => rand(1, 20),
        'category_parameter_id' => rand(1, 24),
        'value' => rand(1, 200) . 'кг'
    ];
});
