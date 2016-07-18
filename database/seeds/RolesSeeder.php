<?php

use Illuminate\Database\Seeder;

class RolesSeeder extends Seeder
{

    public function run()
    {
       
        $table=array(
            array(
                'name'           => 'admin',
                'display_name'   => 'admin',
                'description'    => 'Manage everything',
                
            ),
            array(
                'name'           => 'moderator',
                'display_name'   => 'moderator',
                'description'    => 'Moderate users content',
               
            ),
            array(
                'name'           => 'user',
                'display_name'   => 'user',
                'description'    => 'Moderate his content',
               
            ),
        );
        DB::table('roles')->insert($table);
    }
}
