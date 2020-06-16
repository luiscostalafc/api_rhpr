
<?php

use Illuminate\Database\Seeder;
use App\Models\Admin\Email;

class EmailTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $amount = 10;
        factory(Email::class, $amount)->create();
    }
}