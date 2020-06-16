<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;
use Faker\Factory as FakerFactory;
use Illuminate\Support\Str;

use App\Models\Admin\User;
use App\Models\Admin\System;
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
$factory->define(User::class, function (Faker $faker) use($fakerBR){
    return [
        'name' => $faker->name,
        'rg' => $fakerBR->rg,
        'cpf' => $fakerBR->cpf,
        'workplace' => $faker->name,
        'password' => bcrypt('secret'),
        'blocked' => $faker->boolean,
        'reset' => $faker->boolean,
        'system_id' => System::all()->random()->id
    ];
});
