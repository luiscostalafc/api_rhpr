
<?php

use Illuminate\Database\Seeder;
use App\Models\Admin\System;

class SystemTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $amount = 10;
        factory(System::class, $amount)->create();
    }
}