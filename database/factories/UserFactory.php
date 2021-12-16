<?php

use Faker\Generator as Faker;
use Illuminate\Support\Str;
use Illuminate\Support\Arr;

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
        'phone' => $faker->phoneNumber,
        'email' => $faker->unique()->safeEmail,
        'profile_image' => 'http://via.placeholder.com/150x150',
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'remember_token' => null,
    ];
});

$factory->define(App\Message::class, function (Faker $faker) {
    do {
        $from = rand(1, 15);
        $to = rand(1, 15);
    } while ($from === $to);

    return [
        'from' => $from,
        'to' => $to,
        'text' => $faker->sentence
    ];
});
