<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pregunta extends Model
{
    //

    protected $fillable = [
        'pregunta',
        'examen_id'        
    ];

}
