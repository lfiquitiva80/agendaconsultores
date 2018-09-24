<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class detalle_imp_ica extends Model
{
     protected $table = 'detalle_imp_ica';
  	protected $guarded = ['id'];
  	
  	  public function scopeSearch($query, $nombre)
   {
   return $query ->where('cns_detalle','LIKE' ,  "%$nombre%");
   }

}
