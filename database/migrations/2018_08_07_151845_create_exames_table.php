<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExamesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exames', function (Blueprint $table) {
            $table->increments('id');
            $table->text('queixa');
            $table->text('alergias')->nullable();
            $table->boolean('cardiopatia');
            $table->boolean('has');
            $table->boolean('pneupatia');
            $table->boolean('tireoide');
            $table->boolean('contagious_infectous');
            $table->boolean('dm');
            $table->boolean('nefropatia');
            $table->string('gestante', 20);
            $table->boolean('gastrite');
            $table->boolean('neuropatia');
            $table->boolean('tabagismo');
            $table->boolean('consciente');
            $table->boolean('atitude_antalgica');
            $table->boolean('desmaio_convulsoes');
            $table->boolean('ferida');
            $table->boolean('processo_alergico');
            $table->float('pa', 3, 2);
            $table->float('fc', 3, 2);
            $table->float('temperatura', 8, 2);
            $table->float('sat', 3, 2);
            $table->integer('fr');
            //chave estrangeira que referencia a tabela de pacientes
            $table->foreign('pacient_id')->references('id')->on('pacients');
            //chave estrangeira para referenciar quem fez o processo de triagem
            $table->foreign('user_id')->references('id')->on('users');
            //chave estrangeira que referencia o protocolo
            $table->foreign('prot_id')->references('id')->on('protocols');
            
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
        Schema::dropIfExists('exames');
    }
}
