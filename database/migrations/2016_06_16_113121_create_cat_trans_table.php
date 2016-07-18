<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCatTransTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cat_trans', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->text('desc')->nullable();
            $table->integer('locale_id')->unsigned();
            $table->integer('category_id')->unsigned();
            $table->foreign('locale_id')->references('id')->on('locales')->onDelete('cascade');
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->unique(['locale_id','category_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('cat_trans');
    }
}
