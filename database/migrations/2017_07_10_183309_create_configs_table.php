<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConfigsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('configs', function (Blueprint $table) {

            $table->increments('id');
            $table->string('menu_title');
            $table->string('menu_phone');

            $table->text('about_page');
            $table->text('chef_page');
            $table->text('address');
            $table->text('reservation_phone');
            $table->text('working_hours');

            $table->string('facebook');
            $table->string('twitter');
            $table->string('youtube');

            $table->text('copyright');




            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('configs');
    }
}
