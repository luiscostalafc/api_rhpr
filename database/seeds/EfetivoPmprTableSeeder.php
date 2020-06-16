
<?php

use Illuminate\Database\Seeder;
use App\Models\v0\EfetivoPmpr;

class EfetivoPmprTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $amount = 10;
        factory(EfetivoPmpr::class, $amount)->create();
    }
}