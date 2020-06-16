
<?php

use Illuminate\Database\Seeder;
use App\Models\v0\Policial;

class PolicialTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $amount = 10;
        factory(Policial::class, $amount)->create();
    }
}