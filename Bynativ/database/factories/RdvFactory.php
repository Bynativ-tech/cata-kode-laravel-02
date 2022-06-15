<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Rdv;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

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

$factory->define(Rdv::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'telephone' => $faker->phoneNumber(),
        'email' => $faker->unique()->safeEmail,
        'date' => $faker->date(),
        'heure' => $faker->time(),
        'message' => $faker->name,
    ];
});
