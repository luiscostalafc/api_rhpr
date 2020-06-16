<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;
use Faker\Factory as FakerFactory;
use Illuminate\Support\Str;

use App\Models\v0\DependentesAtiva;

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

$factory->define(DependentesAtiva::class, function (Faker $faker) use($fakerBR){
    return [
        'RG' => $fakerBR->rg,
        'nome' => $faker->name,
        'sexo' => $faker->randomElement(['Masculino', 'Feminino']),
        'data_nasc' => $faker->date('Y-m-d','now'),
        'irpf' => $faker->randomElement(['IRPF', 'Previdência']),
        'parentesco' => $faker->randomElement(['Conjuge', 'Pai', 'Mãe', 'Filho']),
        'dt_ini' => $faker->date('Y-m-d','now'),
        'dt_fim' => $faker->date('Y-m-d','now')
    ];
});
