<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFuncionariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('funcionarios', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('fichacadastral');
            $table->date('dtcadastro');
            $table->integer('cartaosus');
            $table->string('nomeprofissional');
            $table->text('endprofissional');
            $table->string('numendprofissional');
            $table->string('complendprofissional');
            $table->string('bairro');
            $table->string('cidadeprofissional');
            $table->string('cep');
            $table->string('rgprofissional');
            $table->string('cpfprofissional');
            $table->date('dtnascprofissional');
            $table->string('foneprofissional');
            $table->string('celularprofissional');
            $table->string('estcivilprofissional');
            $table->string('sexoprofissional');
            $table->string('conselho');
            $table->string('codconselho');
            $table->string('planSaude');
            $table->string('emailprofissional');
            $table->string('loginprofissional');
            $table->string('senhaprofissional');
            $table->string('funcao');
            $table->string('especialidade1');
            $table->string('especialidade2');
            $table->string('especialidade3');
            $table->string('idiomaprofissional');
            $table->string('naturalidadeprofissional');
            $table->string('docprofissional');
            $table->string('obs');
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
        Schema::drop('funcionarios');
    }
}
