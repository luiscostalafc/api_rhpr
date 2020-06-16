
<?php

use Illuminate\Database\Seeder;
use App\Models\v0\Inativo;

class InativoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $amount = 10;
        factory(Inativo::class, $amount)->create();
    }
}