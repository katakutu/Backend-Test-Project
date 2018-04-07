<?php

use Faker\Generator as Faker;

$factory->define(App\Product::class, function (Faker $faker) {
    return [
        'name' 	=> 'product-'.rand(0,100),
        'price' => rand(100000, 9999999)
    ];
});
