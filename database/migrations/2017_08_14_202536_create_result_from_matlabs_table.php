<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResultFromMatlabsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('result_from_matlabs', function (Blueprint $table) {
            $table->increments('id');
            $table->double('sen');
            $table->double('spe');
            $table->double('fpr');
            $table->double('fnr');
            $table->double('lrp');
            $table->double('lrn');
            $table->double('pre');
            $table->double('npv');
            $table->double('acu');
            $table->double('era');
            $table->double('Fsc');
            $table->double('TP');
            $table->double('FP');
            $table->double('FN');
            $table->double('TN');
            $table->integer('UserId');

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
        Schema::drop('result_from_matlabs');
    }
}
