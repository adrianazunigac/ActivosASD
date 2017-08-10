<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class UbicacionArea
 */
class UbicacionArea extends Model
{
    protected $table = 'ubicacion_area';

    public $timestamps = true;

    protected $fillable = [
        'estado',
        'fk_ciudad_id',
        'fk_area_id'
    ];

    protected $guarded = [];

        
}