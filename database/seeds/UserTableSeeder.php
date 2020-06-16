
<?php

use Illuminate\Database\Seeder;
use App\Models\Admin\User;
use App\Models\Admin\System;
use App\Models\Admin\Permission;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'test',
            'rg' => '101010',
            'cpf' => '101010',
            'workplace' => 'test',
            'password' => bcrypt('secret'),
            'strikes' => 0,
            'blocked' => false,
            'reset' => false,
            'system_id' => System::all()->random()->id
        ]);

        $permissionsIds = Permission::all()->pluck('id');

        $assyncPermissions = User::where('id',$user->id)->first()->permissions()->sync($permissionsIds);
    }
}