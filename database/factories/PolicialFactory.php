<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;
use Faker\Factory as FakerFactory;
use Illuminate\Support\Str;

use App\Models\v0\Policial;
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

$factory->define(Policial::class, function (Faker $faker) use($fakerBR){
    return [
        'ID_META4' => $faker->randomNumber(3),
        'STD_OR_HR_PERIOD' => $faker->randomDigit,
        'DATA_ADMISSAO' => $faker->date('Y-m-d','now'),
        'NOME' => $faker->name,
        'RG' => $fakerBR->rg,
        'CLASSE' => $faker->randomElement(config('cops.class')),
        'NASCIMENTO' => $faker->date('Y-m-d','now'),
        'ID_SEXO' => $faker->randomElement([0,1]),
        'SEXO' => $faker->randomElement(['Masculino', 'Feminino']),
        'ADMISSAO_REAL' => $faker->date('Y-m-d','now'),
        'EMAIL_META4' => $faker->email,
        'FUNCAO' => $faker->randomElement(['Adjunto', 'Chefe', NULL]),
        'CARGO' => $faker->randomElement(config('cops.positions')),
        'QUADRO' => $faker->randomElement(config('cops.groups')),
        'SUBQUADRO' => $faker->randomElement(config('cops.subgroups')),
        'PROMOCAO' => $faker->date('Y-m-d','now'),
        'REFERENCIA' => $faker->randomDigit,
        'BAIRRO' => $faker->citySuffix,
        'CIDADE' => $faker->city,
        'OPM_DESCRICAO' => $faker->name,
        'OPM_META4' => 'W'.$faker->randomNumber(6),
        'CDOPM' => $faker->randomNumber(9)
    ];
});
