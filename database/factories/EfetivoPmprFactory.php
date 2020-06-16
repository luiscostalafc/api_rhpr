<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;
use Faker\Factory as FakerFactory;
use Illuminate\Support\Str;

use App\Models\v0\EfetivoPmpr;
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
$fakerBR = FakerFactory::create('pt_BR');

$factory->define(EfetivOpmpr::class, function (Faker $faker) use($fakerBR){
    return [
        'STD_ID_HR' => $faker->randomNumber(6),
		'STD_OR_HR_PERIOD' => $faker->randomDigit,
		'STD_DT_START' => $faker->date('Y-m-d','now'),
		'STD_N_FIRST_NAME' => $faker->name,
		'CBR_NUM_RG' => $fakerBR->rg,
		'CBR_ID_FUNC_GRUOP' => $faker->randomElement(config('cops.class')),
		'SUS_ID_WORK_CENTER' => 'PM'.$faker->randomNumber(6),
		'STD_WORK_LOCBRA' => $faker->streetAddress,
		'STD_ID_SUB_GEO_DIV' => $faker->randomNumber(3),
		'STD_N_SUB_GEO_DIV' => $faker->city,
		'SCO_ID_WORK_UNIT' => 'W'.$faker->randomNumber(6),
		'STD_N_WORK_UNITBRA' => $faker->name,
		'STD_ID_JOB_CODE' => $faker->randomElement(config('cops.positions')),
		'CBR_ID_CLASS_ORDER' => $faker->randomElement(config('cops.groups')),
		'CBR_ID_CLASS' => $faker->randomElement(config('cops.subgroups')),
		'CBR_ID_REFERENCE' => $faker->randomDigit,
		'CBR_ID_FUNC' => $faker->randomNumber(3),
		'CBR_NM_FUNCBRA' => $faker->randomElement(['Adjunto', 'Chefe', NULL]),
		'STD_DT_BIRTH' => $faker->date('Y-m-d','now'),
		'STD_ID_GENDER' => $faker->randomElement([1,2]),
		'STD_N_GENDERBRA' => $faker->randomElement(['Masculino', 'Feminino']),
		'STD_EMAIL' => $faker->email
    ];
});
