<?php

use Illuminate\Database\Seeder;

class PermissionsSeeder extends Seeder
{
    public function run()
    {
        DB::table('permissions')->delete();
        $table=array(
            array(
                'name'           => 'manage_everything',
                'display_name'   => 'manage everything',
                'description'    => 'manage everything',
                'created_at'     => date("Y-m-d H:i:s"),
                'updated_at'     => date("Y-m-d H:i:s")
            ),
            array(
                'name'           => 'manage_comments',
                'display_name'   => 'manage comments',
                'description'    => 'Allow users to manage comments',
                'created_at'     => date("Y-m-d H:i:s"),
                'updated_at'     => date("Y-m-d H:i:s")
            ),
            array(
                'name'           => 'manage_posts',
                'display_name'   => 'manage posts',
                'description'    => 'Allow users to manage posts',
                'created_at'     => date("Y-m-d H:i:s"),
                'updated_at'     => date("Y-m-d H:i:s")
            ),
            array(
                'name'           => 'manage_your_comments',
                'display_name'   => 'manage your comments',
                'description'    => 'Allow manage your comments',
                'created_at'     => date("Y-m-d H:i:s"),
                'updated_at'     => date("Y-m-d H:i:s")
            ),
            array(
                'name'           => 'manage_your_posts',
                'display_name'   => 'manage your posts',
                'description'    => 'Allow manage your posts',
                'created_at'     => date("Y-m-d H:i:s"),
                'updated_at'     => date("Y-m-d H:i:s")
            ),
            array(
                'name'           => 'publish_posts',
                'display_name'   => 'publish posts',
                'description'    => 'See and use the "publish" button when editing their post',
                'created_at'     => date("Y-m-d H:i:s"),
                'updated_at'     => date("Y-m-d H:i:s")
            ),
            array(
                'name'           => 'manage_your_profile',
                'display_name'   => 'manage your profile',
                'description'    => 'Allows editing your profile',
                'created_at'     => date("Y-m-d H:i:s"),
                'updated_at'     => date("Y-m-d H:i:s")
            ),
            array(
                'name'           => 'edit_users',
                'display_name'   => 'edit users',
                'description'    => "Allows editing other users's profiles",
                'created_at'     => date("Y-m-d H:i:s"),
                'updated_at'     => date("Y-m-d H:i:s")
            )
        );
        DB::table('permissions')->insert($table);
    }
}
