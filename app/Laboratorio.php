<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Laboratorio extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'laboratorios';

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
    protected $fillable = ['tipo', 'departamento', 'desclaboratorio', 'alvaralab', 'cnes', 'endlab', 'numlab', 'tellab', 'turnoatend', 'labresponsavel', 'cgmlab', 'cbolabresp', 'tplab', 'codmaterialcoleta', 'descmaterialcoleta', 'codmetodologia', 'matcoleta', 'preparo', 'codrecipiente', 'descrirecipiente', 'codsetor', 'descsetor', 'codtpdoc', 'desctpdoc', 'codunimedida', 'descunimedida', 'codmetodo', 'descmetodo', 'codrequisito', 'descrequisito', 'sinonimia', 'descsinonimia'];

    
}
