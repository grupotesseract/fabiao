<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTextosDetalhamentoIniciativasTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('textos_detalhamento_iniciativas', function (Blueprint $table) {
            $table->increments('id');
            $table->text('descritivo');
            $table->integer('texto_iniciativa_id')->unsigned();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('texto_iniciativa_id')->references('id')->on('textos_iniciativas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('textos_detalhamento_iniciativas');
    }
}
