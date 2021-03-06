<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','cargo','activo','valor','horas','perfil_usuario','avatar','notificacion','habilitar_empresas'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

     public function scopeSearch($query, $name)
         {
          return $query ->where('name','LIKE' ,  "%$name%");
         }

         public  function perfil()
   {

        return $this->belongsTo('App\perfil','perfil_usuario');

   }

          public  function cargos()
   {

        return $this->belongsTo('App\cargo','cargo');

   }


}
