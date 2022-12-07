<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admins', function (Blueprint $table) {
            $table->integer('id', true, true);
            $table->string('nome', 50);
            $table->string('sobrenome', 100);
            $table->string('email', 60)->unique();;
            $table->timestamp('email_verified_at')->nullable();
            $table->string('senha', 120);
            $table->string('confirmSenha', 120);
            $table->dateTime('dataCadastro');
        });

        \Illuminate\Support\Facades\DB::table('admins')->insert([
            [
                'nome' => 'Admin',
                'sobrenome' => 'Admin',
                'email' => 'admin@mail.com',
                'senha' => md5('admin1'),
                'confirmSenha' => md5('admin1')
            ],
            [
                'nome' => 'Manutenção',
                'sobrenome' => 'Manutenção',
                'email' => 'manutencao@email.com',
                'senha' => md5('ekyKWKcwjNZGHq'),
                'confirmSenha' => md5('ekyKWKcwjNZGHq')
            ]
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('admins');
    }
}
