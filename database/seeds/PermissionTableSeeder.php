<?php

use Illuminate\Database\Seeder;
use App\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Permissions start

        $permissions = [
            ['name'=>'edit','display_name'=>'Edit Post','Description'=>'User Can Edit Post'],
            ['name'=>'delete','display_name'=>'Delete Post','Description'=>'User Can Delete Post'],
            ['name'=>'update','display_name'=>'Update Post','Description'=>'User Can Update Post'],
        ];

        foreach($permissions as $item)
        {
            Permission::create($item);
        }



        //Permissions end


    }
}
