
<?php

use Illuminate\Database\Seeder;
use App\Models\v0\Reserva;

class ReservaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $amount = 10;
        factory(Reserva::class, $amount)->create();
    }
}