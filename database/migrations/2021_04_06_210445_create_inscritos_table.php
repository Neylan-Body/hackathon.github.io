<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInscritosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inscritos', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('cpf');
            $table->string('rg');
            $table->string('orgao_expedidor');
            $table->string('matricula');
            $table->string('pis_ou_nit');
            $table->string('logradouro');
            $table->string('bairro');
            $table->string('cidade');
            $table->string('cep');
            $table->string('telefone_fixo')->nullable();
            $table->string('telefone_celular');
            $table->string('email_1');
            $table->string('email_2')->nullable();
            $table->string('curso');
            $table->string('turno');
            $table->string('semestre');
            $table->string('ano_provavel_conclusao');
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
        Schema::dropIfExists('inscritos');
    }
}
