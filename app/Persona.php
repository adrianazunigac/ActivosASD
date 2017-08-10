<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Persona
 */
class Persona extends Model
{
    protected $table = 'persona';

    public $timestamps = true;

    protected $fillable = [
        'nombres',
        'apellidos',
        'numero_documento',
        'estado'
    ];

    protected $guarded = [];

        
}