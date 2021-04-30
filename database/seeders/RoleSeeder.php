<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            'superadmin',
            'adminuser',
            'komda',
            'member'
        ];

        foreach ($roles as $role) {
            Role::create(['name' => $role]);
        }

        $permissions = [
            'edit-komda',
            'delete-komda',
            'publish-komda',
            'create-komda',
            'create-member',
            'edit-member',
            'delete-member',
            'publish-member',
            'edit-adminuser',
            'delete-adminuser',
            'publish-adminuser'
        ];

        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }
    }
}
