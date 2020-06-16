
<?php

use Illuminate\Database\Seeder;
use App\Models\Admin\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (config('permissions') as $permission) {
            Permission::create(['permission' => $permission]);
        }
    }
}