<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Arreglo extends Model
{
    //Creation model Arreglo
    use SoftDeletes;

    protected $fillable =[
        'user_id','DescripcionArreglo','ValorArreglo','FechaCreacion','FechaEntrega','EstadoArreglo','NombreReclama','TelefonoReclama'
    ];

    protected $dates = ['deleted_at'];

    public function image(){
        return $this->morphOne('App\Image','imageable');
    }

    public function user(){
        return $this->belongsTo(User::class);
    }




}
