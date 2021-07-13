<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Administrador extends Model
{
    //Creacion modelo Administrador
    protected $table = "administradores";
    protected $primaryKey = "IdAdministrador";
    public $timestamps = false;

}
