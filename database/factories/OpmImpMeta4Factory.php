<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;
use Faker\Factory as FakerFactory;
use Illuminate\Support\Str;

use App\Models\v0\OpmImpMeta4;
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

$factory->define(OpmImpMeta4::class, function (Faker $faker) use($fakerBR){
    return [
        'UNIDADE_META4' => 'W'.$faker->randomNumber(6),
        'DESCRICAO_META4' => $faker->name,
        'ID_PAI' => 'W'.$faker->randomNumber(6),
        'DESCRICAO_PAI' => $faker->name,
        'UNIDADE_PMPR' => $faker->stateAbbr,
        'CD_LOCAL_TRABALHO' => $faker->streetName,
        'LOCAL_TRABALHO' => $faker->streetName,
        'DATA_INICIO' => $faker->date('Y-m-d','now'),
        'DATA_FIM' => $faker->date('Y-m-d','now'),
        'LOGRADOURO' => $faker->streetName,
        'BAIRRO' => $faker->citySuffix,
        'MUNICIPIO' => $faker->city,
        'CEP' => $faker->randomNumber(5).'-'.$faker->randomNumber(3),
        'DDD' => $fakerBR->areaCode,
        'TELEFONE' => $fakerBR->phone, 
    ];
});
