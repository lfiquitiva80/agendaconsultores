<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class plantilla_checklist extends Model
{
     protected $table = 'plantilla_checklist';
  	 protected $guarded = ['id'];


  	    public function scopeSearch($query, $nombre)
   {
   return $query ->where('codigo_plantilla_checklist','LIKE' ,  "%$nombre%");
   }
}
