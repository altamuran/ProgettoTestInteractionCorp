<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests;
use Illuminate\Http\JsonResponse;
use Session;

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
            Session::put('path',$path=(Storage::disk('local')->getDriver()->getAdapter()->getPathPrefix()));
            
            return view('/guest/handle', compact('Sito','User'));
	}


   public function Sensori($site_id){

                 $Sensori=DB::table('sensori')
                ->where('ambiente','=', $site_id)
                ->get();

                //dd($Sensori);
          return view('/guest/sensori',compact('Sensori','site_id'));
    }


 
   public function Home(){

        return view('/home');
  }


  public function Detection($id_sensore){

    $detections =DB::table('rilevazioni')
    ->where('id_sensore','=', $id_sensore)
    ->get();
    return view('guest/detection', compact('detections'));

}
    
  public function Download(){
      
      

        $rilevazioni =DB::table('rilevazioni')->join('sensori', 'rilevazioni.id_sensore', '=', 'sensori.id')
            ->join('ambienti','sensori.ambiente','ambienti.id')
            ->where('user','=', Auth::User()->id)->get();
        $path=Session::get('path');
        
        $fp=fopen($path."user_detection.txt","w");
        fwrite($fp,$rilevazioni);
        $user_detection = file_get_contents($path."user_detection.txt");
        fclose($fp);         
        $fileText =file_get_contents($path."user_detection.txt");
        $myName = "ThisDownload.txt";
        $headers = ['Content-type'=>'text/plain', 'test'=>'YoYo', 'Content-Disposition'=>sprintf('attachment; filename="%s"', $myName),'X-BooYAH'=>'WorkyWorky','Content-Length'=>sizeof($fileText)];
         return response()->download($path."user_detection.txt", 'detections.txt', $headers);
          }
}
