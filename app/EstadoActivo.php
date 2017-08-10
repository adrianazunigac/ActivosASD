<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class EstadoActivo
 */
class EstadoActivo extends Model
{
    protected $table = 'estado_activo';

    public $timestamps = true;

    protected $fillable = [
        'nombre',
        'estado'
    ];

    protected $guarded = [];

        
}