<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class detalle_informe extends Model
{
    protected $table = 'detalle_informe';
  	 protected $guarded = ['id'];

  	   public function scopeSearch($query, $nombre)
   {
   return $query ->where('cns_detalle','LIKE' ,  "%$nombre%");
   }

}
