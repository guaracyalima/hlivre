<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'pacientes';

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
    protected $fillable = ['fichaCadastral', 'dataCadastro', 'nome', 'cpf', 'rg', 'dnascimento', 'endereco', 'complemento', 'bairro', 'cep', 'telefone', 'celular', 'sexo', 'estadoCivil', 'etinia', 'religiao', 'planSaude', 'topoSanguineo', 'fatorRH', 'doadorOrgaos', 'doadorSangue', 'insttratamento', 'idioma', 'naturalidae', 'dataCasamento', 'conjugue', 'profissao', 'procurador1', 'foneProcurador1', 'procurador2', 'foneProcurador2'];

    
}
