<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;
use App\Author;

$factory->define(Product::class, function (Faker $faker) {

    $randomnumber = rand(1,100);
    $image = "https://picsum.photos/id/{$randomnumber}/200/300";

    return [
        'author_id' => Author::inRandomOrder()->first()->id,
        'title' => $faker->sentence(4),
        'description' => $faker->sentence(50),
        'image' => $image,
        'jumlah' => rand(10,20),
    ];
});
