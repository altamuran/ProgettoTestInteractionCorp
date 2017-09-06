<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;


use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
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


              public function SiteHandle($user_id){

                 $Sito=DB::table('ambienti')
                ->where('user','=', $user_id)
                ->get();

                $User=\App\User::find($user_id);
                
            return view('/userviews/site_handle',compact('Sito','User'));
    }


           public function SensoriHandle($site_id){

                 $Sensori=DB::table('sensori')
                ->where('ambiente','=', $site_id)
                ->get();

                
                
            return view('/userviews/sensori_handle',compact('Sensori'));
    }


     public function AddUser(){

      $all_user =DB::table('Users')
                ->where('accept','=', 0)
                ->get();
      
      
      return view('/userviews/adminpage',compact('all_user'));
    }

       public function Accept($user_id){

        $accept_user = \App\User::find($user_id);

        $accept_user->accept = 1;

        $accept_user->save();


      return redirect()->action(
    'AdminController@AddUser');

    }
}
