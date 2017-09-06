<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class rilevazioni extends Model
{
    protected $table='rilevazioni';
    public $timestamps = false;

  public function Sensori()
    {
        return $this->belongsTo('\App\Sensori');
	}


}



