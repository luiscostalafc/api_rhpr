<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;
use Illuminate\Support\Str;

use App\Models\v0\FuncoesPrivativas;
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

$factory->define(FuncoesPrivativas::class, function (Faker $faker) {
    return [
        'CBR_ID_FUNC_PRIV' => $faker->randomNumber(5),
        'DT_START' => $faker->date('Y-m-d','now'),
        'DT_END' => $faker->date('Y-m-d','now'),
        'CBR_ID_FUNC' => $faker->randomDigit,
        'STD_ID_JOB_CODE' => $faker->randomElement(config('cops.positions')),
        'CBR_ID_CLASS_ORDER' => $faker->randomElement(config('cops.groups')),
        'CBR_ID_CLASS' => $faker->randomElement(config('cops.subgroups')),
        'STD_ID_WORK_UNIT' => 'W'.$faker->randomNumber(6),
        'CBR_ID_FORM_ACT' => 'MIG',
        'CBR_Q_VACANCY' => $faker->randomDigit,
        'CBR_COMMENT' => $faker->text(200), 
    ];
});
