<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tipo_actividad extends Model
{
    protected $table = 'tipo_actividad';
  	 protected $guarded = ['id'];


  	     public function scopeSearch($query, $nombre)
    {
   return $query ->where('descripcion','LIKE' ,  "%$nombre%");
   }
}
