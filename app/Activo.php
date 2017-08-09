<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Activo extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'activos';

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
    protected $fillable = ['numero','nombre', 'descripcion', 'tipo','peso','talla','ancho','largo','fechacompra','fechabaja','estado'];

    
}
