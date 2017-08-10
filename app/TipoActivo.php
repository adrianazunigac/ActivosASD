<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TipoActivo
 */
class TipoActivo extends Model
{
    protected $table = 'tipo_activo';

    public $timestamps = true;

    protected $fillable = [
        'nombre',
        'estado'
    ];

    protected $guarded = [];

        
}