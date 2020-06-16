
<?php

use Illuminate\Database\Seeder;
use App\Models\v0\PmCm;

class PmCmTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $amount = 10;
        factory(PmCm::class, $amount)->create();
    }
}