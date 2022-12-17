<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cliente_contrato', function (Blueprint $table) {
            $table->increments('cliente_contrato_id');
            $table->string('logradouro', 150);
            $table->string('bairro', 80);
            $table->string('cidade', 80);
            $table->string('estado', 80);
            $table->string('cep', 80);
            $table->string('cartao', 50);
            $table->date('datainstalacao');
            $table->integer('conta_id');
            $table->integer('contrato_id');
            $table->integer('numero');
            $table->integer('aparelho_id');
            $table->string('numeroserie', 80);
            $table->integer('diavencimento');
            $table->double('valor', 8, 2);
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
        Schema::dropIfExists('cliente_contrato');
    }
};
