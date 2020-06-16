<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;
use Faker\Factory as FakerFactory;
use Illuminate\Support\Str;

use App\Models\v0\Inativo;
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

$factory->define(Inativo::class, function (Faker $faker) use($fakerBR){
    return [
        'STD_ID_HR' => $faker->randomNumber(5),
        'STD_OR_RH_PERIOD' => $faker->randomDigit,
        'DT_INI_RH' => $faker->date('Y-m-d','now'),
        'ID_TIPO_RH' => $faker->randomDigit,
        'N_TIPO_RH' => $faker->randomElement(['Pensionista', 'Outro']),
        'CBR_NUM_RG' => $fakerBR->rg,
        'NOME' => $faker->name,
        'DT_NASC' => $faker->date('Y-m-d','now'),
        'SEXO' => $faker->randomElement(['Masculino', 'Feminino']),
        'cargo' => $faker->randomElement(config('cops.positions')),
        'POSTO' => $faker->randomElement(config('cops.groups')),
        'N_RUA' => $faker->randomElement(['Rua','Avenida']),
        'N_TIPO_LOCAL_END' => $faker->randomElement(['Residencial','Apartamento']),
        'QUADRO' => $faker->randomElement(config('cops.class')),
        'ORD_FONE' => $faker->randomDigit,
        'N_TIPO_LOCAL_FONE' => $faker->randomElement(['Correspondência','Recados', NULL]),
        'N_TIPO_LINHA' => $faker->randomElement(['Fixo','Celular']),
        'FONE' => $faker->phoneNumber,
        'END_LOGRADOURO' => $faker->streetName,
        'END_NUMERO' => $faker->buildingNumber,
        'END_COMPL' => $faker->secondaryAddress,
        'END_BAIRRO' => $faker->citySuffix,
        'END_CIDADE' => $faker->city,
    ];
});
