<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReporteDeArreglo extends Model
{
    //Creacion modelo Reporte de Arreglo
    protected $table = "reportearreglos";
    protected $primaryKey = "IdReporteArreglo";
    public $timestamps = false;

}
