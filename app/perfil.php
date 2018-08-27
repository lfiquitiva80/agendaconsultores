<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class perfil extends Model
{
    protected $table = 'perfil';
  	 protected $guarded = ['id'];

  	  public function users()
    {
        return $this->belongsTo('App\User');
    }
}
