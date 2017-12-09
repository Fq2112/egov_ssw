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
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});
$factory->define(App\DataNik::class, function (Faker $faker) {

    return [

        'nik' => $faker->unique()->numerify('######270597000#'),
        'name' => $faker->unique()->name,
        'tempat_lahir' => $faker->city,
        'tgl_lahir' => $faker->dateTimeBetween($startDate = "-20 years", $endDate = "-15 years")->format('Y-m-d'),
        'jk' => $faker->randomElement(['Pria', 'Wanita']),
        'agama' => $faker->randomElement(['Islam', 'Kristen', 'Katolik', 'Hindu', 'Budha']),
        'alamat' => $faker->unique()->streetAddress,
        'pekerjaan' => $faker->unique()->jobTitle,
    ];
});

$factory->define(App\Provinsi::class, function (Faker $faker) {

    return [
        'name' => $faker->unique()->randomElement([
            'SULAWESI TENGAH',
            'SULAWESI SELATAN',
            'SULAWESI TENGGARA',
            'GORONTALO',
            'SULAWESI BARAT',
            'MALUKU',
            'MALUKU UTARA',
            'PAPUA BARAT',
            'PAPUA'


        ]),

    ];
});

$factory->define(App\Provinsi::class, function (Faker $faker) {

    return [
        'name' => $faker->unique()->randomElement([
            'SULAWESI TENGAH',
            'SULAWESI SELATAN',
            'SULAWESI TENGGARA',
            'GORONTALO',
            'SULAWESI BARAT',
            'MALUKU',
            'MALUKU UTARA',
            'PAPUA BARAT',
            'PAPUA'


        ]),

    ];
});
$factory->define(App\Kota::class, function (Faker $faker) {

    return [
        'provinsi_id' => 1,
        'name' => $faker->unique()->randomElement([
            'KABUPATEN SIMEULUE',
            'KABUPATEN ACEH SINGKIL',
            'KABUPATEN ACEH SELATAN',
            'KABUPATEN ACEH TENGGARA',
            'KABUPATEN ACEH TIMUR',
            'KABUPATEN ACEH TENGAH',
            'KABUPATEN ACEH BARAT',
            'KABUPATEN ACEH BESAR',
            'KABUPATEN PIDIE',
            'KABUPATEN BIREUEN',
            'KABUPATEN ACEH UTARA',
            'KABUPATEN ACEH BARAT DAYA',
            'KABUPATEN GAYO LUES',
            'KABUPATEN ACEH TAMIANG',
            'KABUPATEN NAGAN RAYA',
            'KABUPATEN ACEH JAYA',
            'KABUPATEN BENER MERIAH',
            'KABUPATEN PIDIE JAYA',
            'KOTA BANDA ACEH',
            'KOTA SABANG',
            'KOTA LANGSA',
            'KOTA LHOKSEUMAWE',
            'KOTA SUBULUSSALAM',
        ]),

    ];
});