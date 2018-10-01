<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class actividad_cargo extends Model
{
    protected $table = 'actividad_cargo';
  	protected $guarded = ['id'];


  	public function scopeSearch($query, $nombre)
   {
   return $query ->where('id_cargo','LIKE' ,  "%$nombre%");
   }


   public function actividad(){
 		return $this->belongsTo('App\actividad', 'id_actividad');

   }

          public  function cargos()
   {

        return $this->belongsTo('App\cargo','id_cargo');
      
   }
}
