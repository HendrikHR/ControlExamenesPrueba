<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Examen extends Model
{
    //
    protected $table ='examens';
    protected $fillable=[
        'nombre',
        'cantidad',
        'url'
    ];


}
