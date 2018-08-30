<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTextosCubosTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('textos_cubos', function (Blueprint $table) {
            $table->increments('id');
            $table->text('descritivo');
            $table->text('resposta_ec');
            $table->text('resposta_pe');
            $table->text('resposta_pf');
            $table->integer('valor_compra');
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
        Schema::drop('textos_cubos');
    }
}