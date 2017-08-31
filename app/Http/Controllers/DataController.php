<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\User;
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


    public function AutHandle(){
            
            $Sens = \App\Sensori::all();
            $user = Auth::user();
            return view('/userviews/authandle', compact('Sens','user'));
    }



	public function Stat(){

    		return view('/userviews/stat');
	}
}
