<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pago_cliente extends Model
{
      protected $table = 'pago_cliente';
  	 	protected $guarded = ['id'];

  	  public function users()
    {
        return $this->belongsTo('App\User');
    }

    public function scopeSearch($query, $nombre)
   {
   return $query ->where('cliente_pago','LIKE' ,  "%$nombre%");
   }

   public function clientes(){
 		return $this->belongsTo('App\clientes', 'cliente_pago');
   }

}
