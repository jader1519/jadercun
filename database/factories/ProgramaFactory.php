<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Programa;
use Faker\Generator as Faker;

$factory->define(Programa::class, function (Faker $faker) {
    return [
        'nombre_programa' => $faker->title ,
        'numero_semestre' => $faker->randomDigit,
        'profesor_id' => function () {
        	return factory(App\Models\Profesor::class)->create()->id;
        }
    ];
});
