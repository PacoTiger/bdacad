<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'surname' => $faker->lastName,
        'nickname' => $faker->userName,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});
/*
$factory->define(App\Alumno::class, function (Faker\Generator $faker) {
    return [
        'nombre' => $faker->firstName,
        'apellidos' => $faker->lastName,
        'dni' => $faker->ean8,
        'fecha_nac' => $faker->date(),
        'direccion' => $faker->streetAddress,
        'cp' => $faker->postcode,
        'poblacion' => $faker->city,
        'provincia' => $faker->state,
        'tfijo' => $faker->phoneNumber,
        'tmovil' => $faker->phoneNumber,
        'email' => $faker->email,
        'tutor' => $faker->firstName,
        'activo' => $faker->boolean(),
        'domiciliacion' => $faker->boolean(),
        'ccc' => $faker->


    ];
});
*/