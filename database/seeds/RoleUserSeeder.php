<?php

use Illuminate\Database\Seeder;

class RoleUserSeeder extends Seeder
{

    public function run()
    {
        DB::table('role_user')->delete();
        $table=array(
            array(
                'user_id'       => '1',
                'role_id'       => '1',
            ),
            array(
                'user_id'       => '2',
                'role_id'       => '2',
            ),
            array(
                'user_id'       => '3',
                'role_id'       => '3',
            ),
        );
        DB::table('role_user')->insert($table);
    }
}
