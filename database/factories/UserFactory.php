<?php

use Illuminate\Support\Str;
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

$factory->define(App\User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'calle' => $faker->streetName,
        'numero' => $faker->numberBetween($min = 500, $max = 9000),
        'colonia' => $faker->citySuffix,
        'ciudad' => $faker->city,
        'estado' => $faker->state,
        'codigo_postal' => $faker->postcode,
        'telefono' => $faker->phoneNumber,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'remember_token' => Str::random(10),
    ];
});

$factory->define(App\Tienda::class, function (Faker $faker) {
    return [
        'nombre' => $faker->company                 ,
        'calle' => $faker->streetName,
        'numero' => $faker->numberBetween($min = 500, $max = 9000),
        'colonia' => $faker->streetSuffix ,
        'ciudad' => $faker->city,
        'estado' => $faker->state,
        'codigo_postal' => $faker->postcode,
        'telefono' => $faker->phoneNumber,
    ];
});
