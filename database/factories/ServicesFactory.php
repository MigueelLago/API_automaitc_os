<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */


use App\Service;
use Faker\Generator as Faker;

$factory->define(Service::class, function (Faker $faker) {
    return [
        
        'client_name' => $faker->name(),
        'cpf' => $faker->randomFloat(null, 11, 11),
        'phone' => '73999167977',
        'street' => $faker->streetName(),
        'neighborhood' => $faker->secondaryAddress(),
        'city' => $faker->city(),
        'state' => $faker->state(),
        'gender' => $faker->titleMale(),
        'birth' => $faker->date('Y-m-d'),
        'product' => $faker->name(),
        'ps' => $faker->text(),
        'description' => $faker->text()

    ];
});
