<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dato extends Model
{
    protected $fillable = ['id_tienda','P1','P2','P3','P4'];

    public function tienda(){
    	return $this->belongsTo('App\Tienda','id_tienda','id_tienda');
    }
}
