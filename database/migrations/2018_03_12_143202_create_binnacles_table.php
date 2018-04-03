<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBinnaclesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('binnacles', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('hour_id')->unsigned();
            $table->date('date');
            $table->integer('user_id')->unsigned();
            $table->json('parameters');
            $table->integer('out_service')->nullable();
            $table->timestamps();

            $table->foreign('hour_id')->references('id')->on('hours');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('binnacles');
    }
}
