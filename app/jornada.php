<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jornada extends Model
{
    protected $table = 'jornada';
  	 protected $guarded = ['id'];

  	  public function scopeSearch($query, $nombre)
   {
   return $query ->where('descripcion_jornada','LIKE' ,  "%$nombre%");
   }

}
