<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class encabezado_dev_iva extends Model
{
   protected $table = 'encabezado_dev_iva';
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

    public function usuarios2(){
    return $this->belongsTo('App\User', 'responsable');
   }

     public function usuarios3(){
    return $this->belongsTo('App\User', 'responsable');
   }



    public function auditores(){
 		return $this->belongsTo('App\User', 'auditor');
   }
   public function checklista(){
    return $this->belongsTo('App\checklist', 'id_checklist');
   }

}
