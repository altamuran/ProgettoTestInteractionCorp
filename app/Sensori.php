<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sensori extends Model
{	public $timestamps = false;
    protected $table='sensori';

    public function User()
    
    {
        return $this->belongsTo('App\User');


    }

public function ambienti()
    {
        return $this->belongsTo('App\ambienti');
	}



}
    
