<?php

use Illuminate\Database\Seeder;
use App\Locale;
class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        //Languages start

        $locales = ['ინგლისური'=>'en','რუსული'=>'ru','ქართული'=>'ge'];

        foreach($locales as $title => $code)
        {
            Locale::create(['title'=>$title,'code'=>$code]);
        }



        //Languages end
    }
}
