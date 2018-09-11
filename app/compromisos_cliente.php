<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class compromisos_cliente extends Model
{
    protected $table = 'compromisos_cliente';
  	protected $guarded = ['id'];

  	public function scopeSearch($query, $nombre)
   {
   return $query ->where('id_empresa','LIKE' ,  "%$nombre%");
   }


   public function lugar(){

   		return $this->belongsTo('App\lugar', 'lugar_citas');
   }

    public function clientes(){
 		return $this->belongsTo('App\clientes', 'id_empresa');
   }

   public function usuarios(){
 		return $this->belongsTo('App\User', 'usuario_citas');
   }

  
   public function compromiso(){
 		return $this->belongsTo('App\compromisos', 'id_compromiso');
   }

   public function periodos(){
 		return $this->belongsTo('App\periodo', 'id_periodo');
   }
}
