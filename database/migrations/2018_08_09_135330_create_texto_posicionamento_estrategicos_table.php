<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTextoPosicionamentoEstrategicosTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('texto_posicionamento_estrategicos', function (Blueprint $table) {
            $table->increments('id');
            $table->text('texto_pergunta');
            $table->text('texto_resposta_1');
            $table->text('texto_resposta_2');
            $table->text('descritivo_resposta_1');
            $table->text('descritivo_resposta_2');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('texto_posicionamento_estrategicos');
    }
}
