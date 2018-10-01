<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTextosIniciativasTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('textos_iniciativas', function (Blueprint $table) {
            $table->increments('id');
            $table->text('descritivo');
            $table->text('descritivo_pai');
            $table->integer('numero');
            $table->integer('prioridade');
            $table->integer('textos_cubos_id')->unsigned();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('textos_cubos_id')->references('id')->on('textos_cubos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('textos_iniciativas');
    }
}
