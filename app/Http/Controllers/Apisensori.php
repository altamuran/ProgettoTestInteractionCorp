<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\User;
use \App\ambienti;
use \App\Sensori;
use Auth;

class Apisensori extends Controller
{
   protected $rilevazione = [
    "identifiactore" => NULL,
    "codice" => NULL,
    'info'=>NULL,   
];

    public function Get() {

    	$this->rilevazione['identifiactore']=Sensori::all('identificatore')->random(1);

    	$this->rilevazione['codice']=  rand (0000 ,  9999 );
    	
    	$num=rand(1,4);
    	switch ($num) {
    		case '1':
    			$string='OK';
    			break;
			case '2':
    			$string='ERROR';
    			break;
			case '3':
    			$string='NO CONNESSION';
    			break;
			case '4':
    			$string='ALLERT';
    			break;
    		
    		default:
    			$string='GREEN';
    			break;
    	}

    	$this->rilevazione['info']=$string; 


    	return response()->json($this->rilevazione,200);
}

}


