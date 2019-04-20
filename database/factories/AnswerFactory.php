<?php

use Faker\Generator as Faker;

<<<<<<< HEAD
$factory->define(Model::class, function (Faker $faker) {
    return [
        //
=======
$factory->define(App/Answer::class, function (Faker $faker) {
    return [
        'body' => $faker->paragraph(rand(3,7),true),
        'user_id' => App\User::pluck('id')->random(),
        'votes_count' -> rand(0,5)

>>>>>>> lesson13
    ];
});
