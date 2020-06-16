
<?php

use Illuminate\Database\Seeder;
use App\Models\Admin\Log;

class LogTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $amount = 100;
        factory(Log::class, $amount)->create();
    }
}