<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class citas extends Model
{
     protected $table = 'citas';
  	protected $guarded = ['id'];


  	 public function scopeSearch($query, $nombre)
   {
   return $query ->where('id','LIKE' ,  "%$nombre%");
   }

   public function lugar(){

   		return $this->belongsTo('App\lugar', 'lugar_citas');
   }

    public function clientes(){
 		return $this->belongsTo('App\clientes', 'empresa_citas');
   }

   public function usuarios(){
 		return $this->belongsTo('App\User', 'usuario_citas');
   }

   public function jornada(){
 		return $this->belongsTo('App\jornada', 'jornada_citas');
   }

   public function actividad(){
 		return $this->belongsTo('App\actividad', 'actividad_citas');
   }

   public function estado(){
 		return $this->belongsTo('App\estado_cita', 'estado_citas');
   }
}
