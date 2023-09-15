<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use App\Author;
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

 $factory->define(User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'password' => $faker->password,
        'api_key' => '',
    ];
});


$factory->define(Author::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'github' => $faker->domainWord,
        'twitter' => $faker->domainWord,
        'location' => $faker->address,
        'user_id' => $faker->numberBetween(1,1000),
        'latest_article_published'=>$faker->text,
    ];
});
