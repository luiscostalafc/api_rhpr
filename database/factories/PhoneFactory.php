<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;
use Faker\Factory as FakerFactory;
use Illuminate\Support\Str;

use App\Models\Admin\Phone;
use App\Models\Admin\User;
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
$factory->define(Phone::class, function (Faker $faker) use($fakerBR){
    return [
        'type_phone' => $faker->randomElement(config('type_phones')),
        'number' => $fakerBR->phone,
        'user_id' => User::all()->random()->id
    ];
});
