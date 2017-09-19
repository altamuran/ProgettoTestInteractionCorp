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



class SitiController extends Controller
{
    public function SiteHandle($user_id){
                  $u=\App\User::find($user_id);

                  if(!is_null($u)){
                    $Sito=DB::table('ambienti')
                    ->where('user','=', $user_id)
                    ->get();  
                    }else

              return redirect()->action(
              'AdminController@UserHandle');


                $User=\App\User::find($user_id);
                
            return view('/userviews/site_handle',compact('Sito','User'));
    }


    public function AddSite($user_id){

       //$User=\App\User::find($user_id)
       

       $user=$user_id;
      return view('/userviews/addsite',compact('user'));

    }



    public function AddSitePost(Request $request){

       if((is_null($User=\App\User::find($request->input('user')))))return back()->withInput();     
        

        $site= new \App\ambienti;
        $site->descrizione=$request->input('name');
        $site->user=$request->input('user');
        $site->save();

     return redirect()->route('sitehandle', ['id' => $request->input('user')]);

    }

public function EditSite($user_id,$site_id)
  {   
    $s = \App\ambienti::find($site_id);
    if((!is_null($s)==true)){
    $user=$user_id;
    $site=$site_id;
    return view('/userviews/editsite',compact('user_id','site'));
  }else
  return back()->withInput();
  }






public function Edit(Request $request)
  {   
   
    $s = \App\ambienti::find($request->input('sito'));
    $ambiente= $s->ambiente;

    if(is_null($request->input('user')))
      return redirect()->action(
      'SiteController@SitieHandle',['user_id' => $request->input('user')]);

    if(is_string($request->input('sito'))==false)
    {
    $s->descrizione=$request->input('name');
    $s->save();
    return redirect()->action(
      'SitiController@SiteHandle',['user_id' => $request->input('user')]);
    }
    else        
    return redirect()->action(
      'SitiController@SiteHandle',['user_id' => $request->input('user')]);
  }


     public function RemoveSite($request)
    {   

        $s = \App\ambienti::find($request);
        $s->delete();
        


         return back()->withInput();
    }
}
