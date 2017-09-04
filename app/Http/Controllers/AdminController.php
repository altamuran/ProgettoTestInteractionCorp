<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use \App\User;
use \App\ambienti;
use Auth;


class AdminController extends Controller
{		
   
   public function __construct(){
        $this->middleware('auth');
    }


      public function AutHandle(){
            
            $Sens = \App\Sensori::all();
            $user = Auth::user();
            return view('/userviews/authandle', compact('Sens','user'));
    }

          public function UserHandle(){
            
           
            $user = Auth::user();
            $all_user =	\App\User::all();
            return view('/userviews/user_handle', compact('all_user','user'));
    }
}
