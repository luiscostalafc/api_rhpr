<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;
use Faker\Factory as FakerFactory;
use Illuminate\Support\Str;

use App\Models\v0\Ausencia;
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

$factory->define(Ausencia::class, function (Faker $faker) use($fakerBR){
    return [
        'NOME' => $faker->name,
        'CODIGO' => $faker->randomElement(config('cops.positions')),
        'RG' => $fakerBR->rg,
        'OPM_META4' => 'W'.$faker->randomNumber(6),
        'OPM_DESCRICAO' => $faker->name,
        'COD_INCIDENTE' => mt_rand ( 5, 15 ),
        'DESC_INCIDENTE' => $faker->text(200),
        'UNITS' => $faker->randomDigit,
        'DT_INIC' => $faker->date('Y-m-d','now'),
        'DT_FIM' => $faker->date('Y-m-d', 'now'),
    ];
});
