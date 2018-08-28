<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cargo extends Model
{
     protected $table = 'cargo';
  	protected $guarded = ['id'];



  	 public function scopeSearch($query, $nombre)
   {
   return $query ->where('descripcion_cargo','LIKE' ,  "%$nombre%");
   }
}
