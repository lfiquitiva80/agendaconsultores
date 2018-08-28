<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class estado_cita extends Model
{
    protected $table = 'estado_cita';
  	 protected $guarded = ['id'];

  	  public function scopeSearch($query, $nombre)
   {
   return $query ->where('Estado','LIKE' ,  "%$nombre%");
   }
}
