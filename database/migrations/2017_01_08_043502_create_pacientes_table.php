<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePacientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pacientes', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('fichaCadastral');
            $table->date('dataCadastro');
            $table->string('nome');
            $table->string('cpf');
            $table->string('rg');
            $table->date('dnascimento');
            $table->string('endereco');
            $table->string('complemento');
            $table->string('bairro');
            $table->string('cep');
            $table->string('telefone');
            $table->string('celular');
            $table->string('sexo');
            $table->string('estadoCivil');
            $table->string('etinia');
            $table->string('religiao');
            $table->string('planSaude');
            $table->string('topoSanguineo');
            $table->string('fatorRH');
            $table->string('doadorOrgaos');
            $table->string('doadorSangue');
            $table->string('insttratamento');
            $table->string('idioma');
            $table->string('naturalidae');
            $table->string('dataCasamento');
            $table->string('conjugue');
            $table->string('profissao');
            $table->string('procurador1');
            $table->string('foneProcurador1');
            $table->string('procurador2');
            $table->string('foneProcurador2');
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
        Schema::drop('pacientes');
    }
}
