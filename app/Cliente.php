<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    //Creacion modelo Cliente
    protected $table = "clientes";
    protected $primaryKey = "IdCliente";
    public $timestamps = false;

}
