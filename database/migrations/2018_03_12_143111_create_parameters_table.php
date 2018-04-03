<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParametersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parameters', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('classification_id')->unsigned();
            $table->string('tx_parameter',100);
            $table->decimal('nb_min',10,2);
            $table->decimal('nb_max',10,2);
            $table->integer('unit_id')->unsigned();
            $table->timestamps();

            $table->foreign('classification_id')->references('id')->on('classifications');
            $table->foreign('unit_id')->references('id')->on('units');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('parameters');
    }
}
