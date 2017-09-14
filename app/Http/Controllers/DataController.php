<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use \App\User;
use \App\ambienti;
use Auth;

class DataController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

 

	public function Handle(){
            $User = Auth::user();
            $Sito = \App\ambienti::all()->where('user', Auth::User()->id);
            
            return view('/guest/handle', compact('Sito','User'));
	}


   public function Sensori($site_id){

                 $Sensori=DB::table('sensori')
                ->where('ambiente','=', $site_id)
                ->get();

                //dd($Sensori);
          return view('/guest/sensori',compact('Sensori','site_id'));
    }


 



	public function NoUser(){

    		return view('/guest/no_accept_user');
	}


    
}
