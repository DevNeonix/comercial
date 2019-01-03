<?php

use Faker\Generator as Faker;

$factory->define(\App\Usuario::class, function (Faker $faker) {
    return [
        'nombre' => $faker->name,
        'email' => $faker->email,
        'clave' => $faker->password,
        'nacimiento' => $faker->dateTime,
        'documento' => $faker->randomNumber(8),
        'image' => $faker->imageUrl(),
        'cargo' => $faker->title,
    ];
});
