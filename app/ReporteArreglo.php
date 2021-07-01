<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReporteArreglo extends Model
{
    //Creacion modelo Reporte de Arreglo
    protected $table = "reportearreglos";
    protected $primaryKey = "IdReporteArreglo";
    public $timestamps = false;
}
