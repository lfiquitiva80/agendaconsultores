<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class compromisos extends Model
{
    protected $table = 'compromisos';
  	protected $guarded = ['id'];

  	 public function scopeSearch($query, $nombre)
   {
   return $query ->where('descripcion_compromisos','LIKE' ,  "%$nombre%");
   }
}
