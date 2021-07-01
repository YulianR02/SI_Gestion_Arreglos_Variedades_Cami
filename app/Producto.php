<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    ////Creacion modelo Producto
    protected $table = "productos";
    protected $primaryKey = "IdProducto";
    public $timestamps = false;
}
