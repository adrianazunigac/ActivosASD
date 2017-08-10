<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Area
 */
class Area extends Model
{
    protected $table = 'area';

    public $timestamps = true;

    protected $fillable = [
        'nombre',
        'descripcion',
        'estado'
    ];

    protected $guarded = [];

        
}