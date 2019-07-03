<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    $path = storage_path('app\public\product');

    return [
        'name' => $faker->sentence(3),
        'description' => $faker->paragraph(2),
        'price'=> $faker->randomFloat(2, 300, 4000),
        'beer_img' => $faker->image($path,480,600,'cats', false),
    ];
});
