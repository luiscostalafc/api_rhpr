
<?php

use Illuminate\Database\Seeder;
use App\Models\v0\Posto;

class PostoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $amount = 10;
        factory(Posto::class, $amount)->create();
    }
}