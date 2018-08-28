<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class lugar extends Model
{
    protected $table = 'lugar';
  	 protected $guarded = ['id'];

  	   public function scopeSearch($query, $nombre)
   {
   return $query ->where('descripcion_lugar','LIKE' ,  "%$nombre%");
   }
}
