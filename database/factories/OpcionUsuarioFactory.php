<?php

use Faker\Generator as Faker;

$factory->define(\App\OpcionUsuario::class, function (Faker $faker) {
    return [
        "usuario_id"=>random_int(1,26),
        "submenu_id"=>random_int(1,200),
    ];
});
