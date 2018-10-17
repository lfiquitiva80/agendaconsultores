<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class encabezado_imp_reteica extends Model
{
   protected $table = 'encabezado_imp_reteica';
  	 protected $guarded = ['id'];

  	 
  	  public function scopeSearch($query, $nombre)
   {
   return $query ->where('cliente','LIKE' ,  "%$nombre%");
   }

   public function clientes(){
 		return $this->belongsTo('App\clientes', 'cliente');
   }

   public function usuarios(){
 		return $this->belongsTo('App\User', 'responsable');
   }

    public function auditores(){
 		return $this->belongsTo('App\User', 'audito');
  }
  public function checklista(){
    return $this->belongsTo('App\checklist', 'id_checklist');
   }
}
