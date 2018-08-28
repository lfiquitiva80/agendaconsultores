<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class actividad extends Model
{
    protected $table = 'actividad';
  	protected $guarded = ['id'];



  	 public function scopeSearch($query, $nombre)
   {
   return $query ->where('descripcion_actividad','LIKE' ,  "%$nombre%");
   }
}
