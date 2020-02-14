<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Category;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

$factory->define(Category::class, function (Faker $faker) {
       $txt = $faker->word;
    return [
        //
        'name'=>$txt,
        'slug'=>  Str::slug($txt),


    ];
});
