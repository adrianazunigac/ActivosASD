<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Ciudad
 */
class Ciudad extends Model
{
    protected $table = 'ciudad';

    public $timestamps = true;

    protected $fillable = [
        'nombre',
        'estado'
    ];

    protected $guarded = [];

        
}