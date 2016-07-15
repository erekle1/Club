<?php

use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->delete();
        $table=array(
            array(
                'name'           => 'admin',
                'email'          => 'admin@gmail.com',
                'password'       => Hash::make('123456'),
                'remember_token' => '',
                'created_at'     => date("Y-m-d H:i:s"),
                'updated_at'     => date("Y-m-d H:i:s")
            ),
            array(
                'name'           => 'moderator',
                'email'          => 'moderator@gmail.com',
                'password'       => Hash::make('123456'),
                'remember_token' => '',
                'created_at'     => date("Y-m-d H:i:s"),
                'updated_at'     => date("Y-m-d H:i:s")
            ),
            array(
                'name'           => 'user',
                'email'          => 'user@gmail.com',
                'password'       => Hash::make('123456'),
                'remember_token' => '',
                'created_at'     => date("Y-m-d H:i:s"),
                'updated_at'     => date("Y-m-d H:i:s")
            ),
        );
        DB::table('users')->insert($table);
    }
}
