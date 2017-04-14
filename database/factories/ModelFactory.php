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

//$factory->define(App\User::class, function (Faker\Generator $faker) {
//    return [
//        'name' => $faker->name,
//        'email' => $faker->email,
//    ];
//});

$factory->define(App\Shop::class, function (Faker\Generator $faker) {
    return [
        'latlng' => $faker->latitude($min = -12.09569, $max = -12.016118).", ". $faker->longitude($min = -76.966299, $max =-77.081367),
        'address' => $faker->address,
        'district' => $faker->randomElement($array = ["Miraflores", "San Isidro", "La Molina", "La Victoria", "San Luis"]),
        'status' => "ACTIVO"
    ];
});

$factory->define(App\Employee::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'doc_type' => "DNI",
        'doc_number' => $faker->numberBetween($min = 10000000, $max = 99999999),
        'type' => "supervisor",
        'shops_id' => $faker->numberBetween($min = 1, $max = 5),
    ];
});
