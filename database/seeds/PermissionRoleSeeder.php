<?php

use Illuminate\Database\Seeder;

class PermissionRoleSeeder extends Seeder
{
    public function run()
    {
        DB::table('permission_role')->delete();
        $table=array(
            array(
                'permission_id'     => '1',
                'role_id'           => '1', // admin
            ),
            array(
                'permission_id'     => '2',
                'role_id'           => '2', //moderator
            ),
            array(
                'permission_id'     => '3',
                'role_id'           => '2',
            ),
            array(
                'permission_id'     => '6',
                'role_id'           => '2',
            ),
            array(
                'permission_id'     => '8',
                'role_id'           => '2',
            ),
            array(
                'permission_id'     => '4', 
                'role_id'           => '3', //user
            ),
            array(
                'permission_id'     => '5',
                'role_id'           => '3',
            ),
            array(
                'permission_id'     => '7',
                'role_id'           => '3',
            ),
        );
        DB::table('permission_role')->insert($table);
    }
}
