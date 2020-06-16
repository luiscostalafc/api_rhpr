
<?php

use Illuminate\Database\Seeder;
use App\Models\v0\FuncoesPrivativas;

class FuncoesPrivativasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $amount = 10;
        factory(FuncoesPrivativas::class, $amount)->create();
    }
}