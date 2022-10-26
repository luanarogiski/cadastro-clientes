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
            $table->string('name', 50);
            $table->string('email', 60)->unique();;
            $table->timestamp('email_verified_at')->nullable();
            $table->string('senha', 120);
            $table->timestamps();
        });

        \Illuminate\Support\Facades\DB::table('admins')->insert([
            [
                'name' => 'Admin',
                'email' => 'admin@mail.com',
                'senha' => md5('admin1')
            ],
            [
                'name' => 'Manutenção',
                'email' => 'manutencao@email.com',
                'senha' => md5('ekyKWKcwjNZGHq')
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
