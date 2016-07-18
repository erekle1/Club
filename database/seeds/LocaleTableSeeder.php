<?php

use Illuminate\Database\Seeder;

class LocaleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $locales = [
            [
                'code'      =>  'ge',
                'title'     =>  'Georgian'
            ],
            [
                'code'      =>  'en',
                'title'     =>  'English'
            ],
            [
                'code'      =>  'ru',
                'title'     =>  'Russian'
            ]
        ];

        DB::table('locales')->insert($locales);
    }
}
