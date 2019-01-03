<?php

use Faker\Generator as Faker;

$factory->define(\App\Menu::class, function (Faker $faker) {
    return [
        "empresa_id"=>random_int(1,25),
        "menu"=>$faker->word
    ];
});
