<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLaboratoriosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laboratorios', function(Blueprint $table) {
            $table->increments('id');
            $table->string('tipo');
            $table->string('departamento');
            $table->text('desclaboratorio');
            $table->string('alvaralab');
            $table->string('cnes');
            $table->string('endlab');
            $table->string('numlab');
            $table->string('tellab');
            $table->string('turnoatend');
            $table->string('labresponsavel');
            $table->string('cgmlab');
            $table->string('cbolabresp');
            $table->string('tplab');
            $table->string('codmaterialcoleta');
            $table->string('descmaterialcoleta');
            $table->string('codmetodologia');
            $table->string('matcoleta');
            $table->string('preparo');
            $table->string('codrecipiente');
            $table->string('descrirecipiente');
            $table->string('codsetor');
            $table->string('descsetor');
            $table->string('codtpdoc');
            $table->string('desctpdoc');
            $table->string('codunimedida');
            $table->string('descunimedida');
            $table->string('codmetodo');
            $table->string('descmetodo');
            $table->string('codrequisito');
            $table->string('descrequisito');
            $table->string('sinonimia');
            $table->string('descsinonimia');
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
        Schema::drop('laboratorios');
    }
}
