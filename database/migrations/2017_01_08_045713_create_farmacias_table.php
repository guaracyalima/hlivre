<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFarmaciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('farmacias', function(Blueprint $table) {
            $table->increments('id');
            $table->string('departamento');
            $table->string('farmaceuticoResponsavel');
            $table->string('responsavelTecnico');
            $table->string('autosanitaria');
            $table->string('inscricaoEstadual');
            $table->string('crf');
            $table->string('cnpj');
            $table->string('numeroLicenca');
            $table->string('isncricaoMinFazenda');
            $table->string('regiao');
            $table->string('codFarmaceutico');
            $table->string('cpfFarmaceutico');
            $table->string('cgmFarmaceutico');
            $table->string('cnpjFarmaceutico');
            $table->string('codMedicacao');
            $table->string('nomeGenerico');
            $table->string('nomeOficial');
            $table->string('nomeAnvisa');
            $table->string('prescMedica');
            $table->string('listControlados');
            $table->string('medReferencia');
            $table->string('laboratorio');
            $table->string('nomeFormaFarma');
            $table->string('concentracao');
            $table->string('classificacaomed');
            $table->string('hiperdia');
            $table->string('obsinclumed');
            $table->string('codincluprogs');
            $table->string('descprogs');
            $table->string('depadm');
            $table->string('tpacao');
            $table->string('incluclassificacao');
            $table->string('mascara');
            $table->string('classificacao');
            $table->string('tipomed');
            $table->string('descclassificacao');
            $table->string('obsinclucassificacao');
            $table->string('codmedreferencia');
            $table->string('nomemedreferencia');
            $table->string('codtpreceita');
            $table->string('desctpreceita');
            $table->string('profissional');
            $table->string('possologia');
            $table->string('requisitante');
            $table->string('numreceita');
            $table->string('viasrecibo');
            $table->string('receitaativa');
            $table->string('prescmedicaconsultapaciente');
            $table->string('periodoconsulta');
            $table->string('antefamicardiovasculares');
            $table->string('codmedanvisa');
            $table->string('nomemedanvisa');
            $table->string('nomemedclassterap');
            $table->string('codconcentracao');
            $table->string('nomeconcentracao');
            $table->string('codconcentracaoxanvisa');
            $table->string('codmedcontrl');
            $table->string('nomemedcontrl');
            $table->string('codprescmedxanvisa');
            $table->string('codprescmed');
            $table->string('nomeprescmed');
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
        Schema::drop('farmacias');
    }
}
