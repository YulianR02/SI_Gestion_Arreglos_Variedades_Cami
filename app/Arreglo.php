<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Arreglo extends Model
{
    //Creacion modelo Arreglo
    protected $table = "arreglos";
    protected $primaryKey = "IdArreglo";
    public $timestamps = false;

}
