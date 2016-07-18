<?php

use Illuminate\Database\Seeder;

class PermissionsSeeder extends Seeder
{
    public function run()
    {
        $table=array(
            array(
                'name'           => 'manage_everything',
                'display_name'   => 'manage everything',
                'description'    => 'manage everything',
                
            ),
            array(
                'name'           => 'manage_comments',
                'display_name'   => 'manage comments',
                'description'    => 'Allow users to manage comments',
                
            ),
            array(
                'name'           => 'manage_posts',
                'display_name'   => 'manage posts',
                'description'    => 'Allow users to manage posts',
               
            ),
            array(
                'name'           => 'manage_your_comments',
                'display_name'   => 'manage your comments',
                'description'    => 'Allow manage your comments',
               
            ),
            array(
                'name'           => 'manage_your_posts',
                'display_name'   => 'manage your posts',
                'description'    => 'Allow manage your posts',
              
            ),
            array(
                'name'           => 'publish_posts',
                'display_name'   => 'publish posts',
                'description'    => 'See and use the "publish" button when editing their post',
               
            ),
            array(
                'name'           => 'manage_your_profile',
                'display_name'   => 'manage your profile',
                'description'    => 'Allows editing your profile',
               
            ),
            array(
                'name'           => 'edit_users',
                'display_name'   => 'edit users',
                'description'    => "Allows editing other users's profiles",
              
            )
        );
        DB::table('permissions')->insert($table);
    }
}
