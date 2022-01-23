<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Respuesta extends Model
{
    //
    protected $fillable = [
        'respuesta',
        'valorcorrecto',
        'pregunta_id'
    ];
}
