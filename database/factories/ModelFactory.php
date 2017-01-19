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
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
        'phone' => $faker->e164PhoneNumber,
        'company_id' => $faker->randomElement(range(1,100)),
        'ic' => $faker->randomNumber(9),
        'passport' =>  $faker->randomNumber(9),
        'is_admin' => $faker->boolean,
        'is_visitor' => $faker->boolean,
    ];
});

$factory->define(App\Company::class, function (Faker\Generator $faker) {

    return [
        'name' => $faker->company,
        'is_tenant' => $faker->boolean,
        'floor' => $faker->randomElement(range(0,40)),
    ];
});

$factory->define(App\Visit::class, function (Faker\Generator $faker) {

    return [
        'user_id' => $faker->randomElement(range(1,100)),
        'company_id' => $faker->randomElement(range(1,10)),
        'purpose' => $faker->paragraph
    ];
});