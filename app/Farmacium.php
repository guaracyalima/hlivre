<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Farmacium extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'farmacias';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['departamento', 'farmaceuticoResponsavel', 'responsavelTecnico', 'autosanitaria', 'inscricaoEstadual', 'crf', 'cnpj', 'numeroLicenca', 'isncricaoMinFazenda', 'regiao', 'codFarmaceutico', 'cpfFarmaceutico', 'cgmFarmaceutico', 'cnpjFarmaceutico', 'codMedicacao', 'nomeGenerico', 'nomeOficial', 'nomeAnvisa', 'prescMedica', 'listControlados', 'medReferencia', 'laboratorio', 'nomeFormaFarma', 'concentracao', 'classificacaomed', 'hiperdia', 'obsinclumed', 'codincluprogs', 'descprogs', 'depadm', 'tpacao', 'incluclassificacao', 'mascara', 'classificacao', 'tipomed', 'descclassificacao', 'obsinclucassificacao', 'codmedreferencia', 'nomemedreferencia', 'codtpreceita', 'desctpreceita', 'profissional', 'possologia', 'requisitante', 'numreceita', 'viasrecibo', 'receitaativa', 'prescmedicaconsultapaciente', 'periodoconsulta', 'antefamicardiovasculares', 'codmedanvisa', 'nomemedanvisa', 'nomemedclassterap', 'codconcentracao', 'nomeconcentracao', 'codconcentracaoxanvisa', 'codmedcontrl', 'nomemedcontrl', 'codprescmedxanvisa', 'codprescmed', 'nomeprescmed'];

    
}
