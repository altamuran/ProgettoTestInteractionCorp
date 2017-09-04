<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\User;
use \App\ambienti;
use Auth;

class DataController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function User(){ 

            return view('/userviews/user');
	}

	public function Handle(){
            
            $Sens = \App\Sensori::all()->where('user', Auth::User()->id);
            $user = Auth::user();
            
            
            return view('/userviews/handle', compact('Sens','user'));
	}


 



	public function Stat(){

    		return view('/userviews/stat');
	
    }


    public function Sito($id){

            $user = Auth::user();
            $sito = \App\ambienti::find($id);

            $Sensori=\App\Sensori::all()->where('ambiente', $sito['id']);
            

            //gestione e controllo accesso autorizzato
            return view('/userviews/sito',compact('sito','user','Sensori'));
        }
    
}
