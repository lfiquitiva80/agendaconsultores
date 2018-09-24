<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class detalle_imp_retencion extends Model
{
     protected $table = 'detalle_imp_retencion';
  	 protected $guarded = ['id'];

  	   public function scopeSearch($query, $nombre)
   {
   return $query ->where('cns_detalle','LIKE' ,  "%$nombre%");
   }

}
