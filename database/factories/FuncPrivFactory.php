<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;
use Illuminate\Support\Str;

use App\Models\v0\FuncPriv;
/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
| Consult database/factories/Faker.md to see the available fakers 
|
*/

$factory->define(FuncPriv::class, function (Faker $faker) {
    return [
        'STD_ID_HR' => $faker->randomNumber(5),
        'STD_OR_HR_PERIOD_NUMBER' => $faker->randomDigit,
        'DT_START' => $faker->date('Y-m-d','now'),
        'DT_END' => $faker->date('Y-m-d','now'),
        'CBR_ID_FUNC_PRIV' => $faker->randomNumber(5),
        'CBR_ID_FORM_ACT' => $faker->name,
        'SCO_ID_REA_CHANG' => 'DES'
    ];
});
