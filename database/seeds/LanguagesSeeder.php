<?php

use Illuminate\Database\Seeder;

class LanguagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('locales')->delete();
        $table=array(
            array(
                'code'    =>  'en',
                'title'   =>  'english',
            ),
            array(
                'code'    =>  'ge',
                'title'   =>  'georgia',
            ),
            array(
                'code'    =>  'ru',
                'title'   =>  'russian',
            ),
        );
        DB::table('locales')->insert($table);
    }
}
