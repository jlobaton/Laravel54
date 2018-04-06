<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tienda extends Model
{
    protected $fillable = ['nom_tienda'];

    public function dato(){
    	return $this->hasMany('App\Dato','id_tienda');
    }
}
