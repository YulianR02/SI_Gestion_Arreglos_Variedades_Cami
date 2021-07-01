<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Apartado extends Model
{
   //Creacion modelo Apartado
   protected $table = "apartados";
   protected $primaryKey = "IdApartado";
   public $timestamps = false;
}
