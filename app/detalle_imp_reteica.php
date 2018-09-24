<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class detalle_imp_reteica extends Model
{
    protected $table = 'detalle_imp_reteica';
  	protected $guarded = ['id'];

  	  public function scopeSearch($query, $nombre)
   {
   return $query ->where('cns_detalle','LIKE' ,  "%$nombre%");
   }

}
