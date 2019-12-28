<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\products;
use Faker\Generator as Faker;

$factory->define(products::class, function (Faker $faker) {

    return [
        'merk' => $faker->word,
        'harga' => $faker->randomDigitNotNull,
        'stok' => $faker->randomDigitNotNull,
        'gbr_product' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
