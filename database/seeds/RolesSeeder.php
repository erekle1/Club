<?php

use Illuminate\Database\Seeder;

class RolesSeeder extends Seeder
{

    public function run()
    {
        DB::table('roles')->delete();
        $table=array(
            array(
                'name'           => 'admin',
                'display_name'   => 'admin',
                'description'    => 'Manage everything',
                'created_at'     => date("Y-m-d H:i:s"),
                'updated_at'     => date("Y-m-d H:i:s")
            ),
            array(
                'name'           => 'moderator',
                'display_name'   => 'moderator',
                'description'    => 'Moderate users content',
                'created_at'     => date("Y-m-d H:i:s"),
                'updated_at'     => date("Y-m-d H:i:s")
            ),
            array(
                'name'           => 'user',
                'display_name'   => 'user',
                'description'    => 'Moderate his content',
                'created_at'     => date("Y-m-d H:i:s"),
                'updated_at'     => date("Y-m-d H:i:s")
            ),
        );
        DB::table('roles')->insert($table);
    }
}
