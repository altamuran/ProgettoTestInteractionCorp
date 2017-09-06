<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ambienti extends Model
{

	protected $table='ambienti';

	
        public function Sensori()
    {
        return $this->hasMany('App\Sensori');
    }


    public function User()
    
    {
        return $this->belongsTo('App\User');


    }
}
