<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Commet extends Model
{
    //creation model for comments
    //Creation del model de sub categories
    protected $guarded =[ ];

    public function image(){
        return $this->morphOne('App\Image','imageable');
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function replies(){
        return $this->hasMany(Commet::class,'parent_id');
    }
}
