<?php

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
        'email' => $faker->unique()->safeEmail,
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'remember_token' => str_random(10),
    ];
});


$factory->define(App\News::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence,
        'sub_title' => $faker->paragraph,
        'body' => $faker->paragraph,
        'user_id' => function() {
            if (App\User::find(1)) {
                return App\User::find(1)->id;
            }
        	else {
                return factory(App\User::class)->create()->id;
            }
        }
    ];
});
