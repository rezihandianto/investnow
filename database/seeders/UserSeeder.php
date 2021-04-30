<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $superadmin = User::create([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('password')
        ]);

        $superadmin->assignRole('superadmin');
        $superadmin->givePermissionTo([
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
        ]);

        $member = User::create([
            'name' => 'user',
            'email' => 'user@user.com',
            'password' => bcrypt('password')
        ]);

        $member->assignRole('member');

        $adminuser = User::create([
            'name' => 'adminuser',
            'email' => 'adminuser@admin.com',
            'password' => bcrypt('password')
        ]);

        $adminuser->assignRole('adminuser');
        $adminuser->givePermissionTo([
            'create-member',
            'edit-member',
            'delete-member',
            'publish-member',
        ]);

        $komda = User::create([
            'name' => 'komda',
            'email' => 'komda@app.com',
            'password' => bcrypt('password')
        ]);

        $komda->assignRole('komda');
        $komda->givePermissionTo([
            'create-member',
            'edit-member',
            'delete-member',
            'publish-member',
            'edit-adminuser',
            'delete-adminuser',
            'publish-adminuser'
        ]);
    }
}
