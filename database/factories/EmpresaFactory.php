<?php

use Faker\Generator as Faker;

$factory->define(\App\Empresa::class, function (Faker $faker) {
    return [
        'razon_social'=>$faker->name,
        'ruc'=>"20".$faker->randomNumber(8)."0",
        'propietario'=>$faker->name,
        'telefono'=>$faker->phoneNumber,
        'direccion'=>$faker->address
    ];
});
