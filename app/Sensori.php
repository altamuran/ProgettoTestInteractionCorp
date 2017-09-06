<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sensori extends Model
{	public $timestamps = false;
    protected $table='sensori';

    

public function ambienti()
    {
        return $this->belongsTo('\App\ambienti');
	}

public function rilevazioni()
    {
        return $this->hasMany('\App\rilevazioni');
    }



}
    
