<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Funcionario extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'funcionarios';

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
    protected $fillable = ['fichacadastral', 'dtcadastro', 'cartaosus', 'nomeprofissional', 'endprofissional', 'numendprofissional', 'complendprofissional', 'bairro', 'cidadeprofissional', 'cep', 'rgprofissional', 'cpfprofissional', 'dtnascprofissional', 'foneprofissional', 'celularprofissional', 'estcivilprofissional', 'sexoprofissional', 'conselho', 'codconselho', 'planSaude', 'emailprofissional', 'loginprofissional', 'senhaprofissional', 'funcao', 'especialidade1', 'especialidade2', 'especialidade3', 'idiomaprofissional', 'naturalidadeprofissional', 'docprofissional', 'obs'];

    
}
