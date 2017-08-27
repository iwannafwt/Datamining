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
            $table->string('sen');
            $table->string('spe');
            $table->string('fpr');
            $table->string('fnr');
            $table->string('lrp');
            $table->string('lrn');
            $table->string('pre');
            $table->string('npv');
            $table->string('acu');
            $table->string('era');
            $table->string('Fsc');
            $table->string('TP');
            $table->string('FP');
            $table->string('FN');
            $table->string('TN');
            $table->integer('UserId');
            $table->integer('dataset');
            $table->integer('algorithm');
            $table->text('C2');
            $table->text('IDX');

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
