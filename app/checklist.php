<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class checklist extends Model
{
      protected $table = 'checklist';
  	protected $guarded = ['id'];



  	 public function scopeSearch($query, $nombre)
   {
   return $query ->where('descripcion','LIKE' ,  "%$nombre%");
   }
}
