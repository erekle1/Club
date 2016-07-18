<?php

use Illuminate\Database\Seeder;
class DatabaseSeeder extends Seeder
{
    public function run()
    {
        Eloquent::unguard();

        $this->call('LanguagesSeeder');
        $this->call('RolesSeeder');
        $this->call('PermissionsSeeder');
        $this->call('PermissionRoleSeeder');
        $this->call('UsersSeeder');
        $this->call('RoleUserSeeder');
        $this->call('CategorySeeder');
    }
}
