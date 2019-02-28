<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create(['name' => 'admin'])->syncPermissions(
            Permission::getPermissions(
                array()
            )
        );
        Role::create(['name' => 'teacher'])->givePermissionTo(
            'view_students'
        );
        Role::create(['name' => 'student']);
    }
}
