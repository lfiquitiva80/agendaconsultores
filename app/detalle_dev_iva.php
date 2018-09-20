<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class detalle_dev_iva extends Model
{
    protected $table = 'detalle_dev_iva';
  	protected $guarded = ['id'];


  	  public function scopeSearch($query, $nombre)
   {
   return $query ->where('cns_detalle','LIKE' ,  "%$nombre%");
   }


}
