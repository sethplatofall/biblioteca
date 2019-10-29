<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Models\Authorization;
use Faker\Generator as Faker;

$factory->define(Authorization::class, function (Faker $faker) {
    return [
        //
        'name' => $faker->word,
        'slug' => $faker->word,
    ];
});
