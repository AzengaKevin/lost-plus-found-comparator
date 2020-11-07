<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Report;
use Faker\Generator as Faker;

$factory->define(Report::class, function (Faker $faker) {

    return [
        'person_name' => $faker->name,
        'person_national_identification_number' => $faker->randomElement([10007147, 33708342, 20391554]),
        'person_birth_certificate_number' => '33708342',
        'person_passport_number' => '33708342',
        'person_phone_number' => '+254707427854',
        'person_date_of_birth' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'keys' => [ 'eye color', 'mood', 'height', 'language spoken' ],
        'values' => [ 'green', 'sober', '8 feet', 'Swahili, English, Luyha' ],
        'last_seen' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'last_seen_place' => $faker->streetName,
        'last_seen_with' => array('Nova', 'Doti', 'Mercy'),
    ];

});
