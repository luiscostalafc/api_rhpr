
<?php

use Illuminate\Database\Seeder;
use App\Models\v0\PolicialHistorico;

class PolicialHistoricoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $amount = 10;
        factory(PolicialHistorico::class, $amount)->create();
    }
}