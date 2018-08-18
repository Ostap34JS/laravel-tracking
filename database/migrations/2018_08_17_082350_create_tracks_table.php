<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTracksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tracks', function (Blueprint $table) {
            $table->increments('id');
            //load information
            $table->string('code');
            $table->string('from');
            $table->string('to');
            $table->string('load')->nullable();//sizes, for example 2 pc(s) 750pc(s)
            $table->string('dims')->nullable();

            //load status

            $table->string('at_origin')->nullable();
            $table->dateTime('at_origin_date')->nullable();

            $table->string('freight_loaded')->nullable();
            $table->dateTime('freight_loaded_date')->nullable();

            $table->string('current_location')->nullable();
            $table->dateTime('current_location_date')->nullable();

            $table->string('at_distination')->nullable();
            $table->dateTime('at_distination_date')->nullable();

            $table->dateTime('delivered')->nullable();

            //Load summary

            $table->string('status');

            $table->string('pod');

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
        Schema::dropIfExists('tracks');
    }
}
