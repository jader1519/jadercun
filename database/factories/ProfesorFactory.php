<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Profesor;
use Faker\Generator as Faker;

$factory->define(Profesor::class, function (Faker $faker) {
    return [
        'nombre' => $faker->name,
        'apellido' => $faker->lastName,
        'profesion' => $faker->word,
        'informacion_adicional' => [
        	"edad" => $faker->randomDigit,
        	"fecha_nacimiento" => $faker->date($format = 'Y-m-d', $max = 'now')
        ]
    ];
});
