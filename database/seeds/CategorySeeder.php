<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Category::class, 10)->create()->each(function($u) {
            $u->catTrans()->saveMany(factory(App\CategoryTrans::class,3)->make());
        });
    }
}
