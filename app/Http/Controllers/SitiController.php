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


    public function AddSite(){
     
      return view('/userviews/addsite');

    }



    public function AddSitePost(Request $request){

            
        

        $site= new \App\ambienti;
        $site->descrizione=$request->input('name');
        $site->user=$request->input('user');
        $site->save();

     return redirect()->route('sitehandle', ['id' => $request->input('user')]);

    }

        public function RemoveSite($request)
    {   

        $s = \App\ambienti::find($request);
        $s->delete();
        


         return back()->withInput();
    }
}
