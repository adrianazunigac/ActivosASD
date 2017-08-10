<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ResponsableActivo
 */
class ResponsableActivo extends Model
{
    protected $table = 'responsable_activo';

    public $timestamps = true;

    protected $fillable = [
        'tipo_responsable',
        'estado',
        'fk_activo_id',
        'fk_persona_id',
        'fk_area_id'
    ];

    protected $guarded = [];

        
}