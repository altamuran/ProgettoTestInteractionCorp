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


  $all_user=DB::table('Users')
  ->where('accept','=', 1)
  ->get();
  $user = Auth::user();

  $flag=0;

  return view('/userviews/user_handle', compact('all_user','user','flag'));
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


public function Search(Request $request)
{   
  $user = \App\User::find($request->ricerca);
  $flag=1;
  if( is_null($user))return redirect()->action(
    'AdminController@UserHandle',compact('flag'));


    return redirect()->action(
      'AdminController@SiteHandle',['user_id' => $user->id]);
}  
  


}
