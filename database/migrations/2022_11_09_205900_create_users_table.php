<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->integer('id', true, true);
            $table->integer('admins_id', false, true);
            $table->foreign('admins_id')->references('id')->on('admins');
            $table->string('nome', 220);
            $table->string('sobrenome', 220);
            $table->date('dataNascimento');
            $table->string('rg', 20);
            $table->string('cpf', 20);
            $table->string('telefone', 20);
            $table->string('cidade', 50);
            $table->string('estado', 10);
            $table->string('endereco', 100);
            $table->string('email', 70)->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('senha', 32);
            $table->string('confirmSenha', 32);
            $table->dateTime('dataCadastro');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
