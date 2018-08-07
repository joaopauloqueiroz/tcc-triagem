<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePacientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pacients', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 45);
            $table->string('rg', 9);
            $table->char('emissor', 3);
            $table->string('cpf', 11);
            $table->integer('cns', 16)->nullable();
            $table->integer('pis', 11)->nullable();
            $table->char('sexo', 1);
            $table->string('estado_civil', 20);
            $table->string('profissao', 30);
            $table->date('data_nacimento');
            $table->string('name_mae', 45);
            $table->string('name_pai', 45);
            $table->integer('cep', 8);
            $table->string('rua', 45);
            $table->string('bairro', 45);
            $table->string('tp_logradouro', 12);
            $table->string('logradouro', 45);
            $table->string('cidade', 45);
            $table->integer('numero', 9);
            $table->string('complemento', 45)->nullable();
            $table->char('estado', 2);
            $table->string('celuar', 12);
            $table->string('telefone', 11)->nullable();
            $table->string('email')->nullable();
            //chave estrangeira que referencia a tabela de usuario, para saber quem fez o cadastro
            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('pacients');
    }
}
