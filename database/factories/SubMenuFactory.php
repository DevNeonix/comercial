<?php

use Faker\Generator as Faker;

$factory->define(\App\Submenu::class, function (Faker $faker) {
    return [

        "menu_id"=>random_int(1,100),
        "submenu"=>$faker->word,
        "url"=>"",
    ];
});
