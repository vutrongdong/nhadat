<?php

use Faker\Generator as Faker;

$factory->define(FTW\CategoryBlog::class, function (Faker $faker) {
    return [
              'id' => str_random(10),
              'name' => $faker->name,
              'slug' => $faker->slug
        ];
});
