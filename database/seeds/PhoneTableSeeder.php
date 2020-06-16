
<?php

use Illuminate\Database\Seeder;
use App\Models\Admin\Phone;

class PhoneTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $amount = 10;
        factory(Phone::class, $amount)->create();
    }
}