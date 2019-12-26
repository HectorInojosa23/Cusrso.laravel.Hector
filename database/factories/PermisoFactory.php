<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use app\Models;
use Faker\Generator as Faker;
use App\Models\Permiso;

$factory->define(Permiso::class, function (Faker $faker) {
    return [
        'nombre' => $faker->word,
        'slug' => $faker->word,
    ];
});
