<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class empresa extends Model
{
      protected $table = 'empresa';
  	 protected $guarded = ['id'];

  	   public function scopeSearch($query, $nombre)
   {
   return $query ->where('razon_social','LIKE' ,  "%$nombre%");
   }

}
