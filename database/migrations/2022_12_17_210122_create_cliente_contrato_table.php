<?php

use App\Models\Aparelho;
use App\Models\Cliente;
use App\Models\Conta;
use App\Models\Contrato;
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
        Schema::create('cliente_contratos', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Cliente::class, 'cliente_id')->constrained();
            $table->foreignIdFor(Contrato::class, 'contrato_id')->constrained();
            $table->foreignIdFor(Conta::class, 'conta_id')->constrained();
            $table->foreignIdFor(Aparelho::class, 'aparelho_id')->constrained();
            $table->string('logradouro')->nullable();
            $table->string('bairro')->nullable();
            $table->string('cidade')->nullable();
            $table->string('estado')->nullable();
            $table->string('cep')->nullable();
            $table->string('cartao')->nullable();
            $table->string('numero')->nullable();
            $table->string('numero_serie')->nullable();
            $table->string('valor')->nullable();
            $table->date('data_instalacao')->nullable();
            $table->date('dia_vencimento')->nullable();
            $table->string('observacao')->nullable();
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
