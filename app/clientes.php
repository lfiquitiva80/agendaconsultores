<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class clientes extends Model
{
    protected $table = 'cliente';
  	protected $guarded = ['id'];

   public function scopeSearch($query, $nombre)
   {
   return $query ->where('nombre_cliente','LIKE' ,  "%$nombre%");
   }
}
