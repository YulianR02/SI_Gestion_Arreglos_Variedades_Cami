<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReporteDeProducto extends Model
{
    //Creacion modelo Reporte de Producto
    protected $table = "reporteproductos";
    protected $primaryKey = "IdReporteProducto";
    public $timestamps = false;
}
