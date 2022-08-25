<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->integer('id', true, true);
            $table->string('nome');
            $table->date('dataNascimento');
            $table->string('cpf');
            $table->string('profissao');
            $table->string('telefone');
            $table->string('cidade');
            $table->string('endereco');
            $table->date('dataCadastro');
            $table->date('dataCompra');
            //$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clientes');
    }
}
