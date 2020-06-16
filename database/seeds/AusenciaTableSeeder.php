
<?php

use Illuminate\Database\Seeder;
use App\Models\v0\Ausencia;

class AusenciaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $amount = 10;
        factory(Ausencia::class, $amount)->create();
    }
}