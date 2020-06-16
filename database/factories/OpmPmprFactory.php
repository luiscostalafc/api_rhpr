<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;
use Faker\Factory as FakerFactory;
use Illuminate\Support\Str;

use App\Models\v0\OpmPmpr;
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

$factory->define(OpmPmpr::class, function (Faker $faker) use($fakerBR){
    return [
        'META4' => 'W'.$faker->randomNumber(6),
        'NOME_META4' => $faker->name,
        'CODIGO' => $faker->randomNumber(9),
        'DESCRICAO' => $faker->text(5),
        'ABREVIATURA' => $faker->text(5),
        'TIPO' => $faker->randomElement(['OP','ADM']),
        'MUNICIPIO' => $faker->city,
        'CDMUNICIPIO' => $faker->randomNumber(3),
        'TITULO' => $faker->randomElement(['SECAO','OPM','GRUPAMENTO']),
        'CODIGOBASE' => $faker->randomNumber(9),
        'CODIGONOVO' => $faker->randomNumber(9),
        'TELEFONE' => $fakerBR->phone
    ];
});
