<?php

use App\Category;
use App\Color;
use Faker\Generator as Faker;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use App\Product;

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(Product::class, function (Faker $faker) {
    $color = factory(Color::class)->create();
    $cat = factory(Category::class)->create();
    return [
        'admin_id' => 1,
        'color_id' => $color->id,
        'image' => null,
        'title' => $faker->title,
        'description' => $faker->text($maxNbChars = 50),
        'price' => $faker->numberBetween(10000, 5000000),
        'tag' => $faker->word,
        'total_qty' => 0,
    ];
});
