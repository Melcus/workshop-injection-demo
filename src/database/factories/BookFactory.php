<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Book;
use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(Book::class, function (Faker $faker) {
    return [
        'release_date' => $faker->dateTimeBetween('-30 years', 'now')->format('Y-m-d'),
        'title'        => ucfirst(implode(" ", $faker->words(rand(2,5)))),
        'description'  => $faker->sentence,
        'price'        => rand(1000, 999999),
    ];
});
