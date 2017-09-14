<?php

namespace App\Http\Middleware;

use Closure;

class Rilevazione
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {   
        $fp=fopen("C:/Users/USER/wa/InteractionCorp/rilevazioni.txt","r+");
        $rilevazione = file_get_contents('C:/Users/USER/wa/InteractionCorp/rilevazioni.txt');
        $flag=strstr($rilevazione, 'null');
        if($flag==false){
            //$ril=new \App\rilevazioni;
               $id=substr($rilevazione,0, strpos($rilevazione, ' '));
               $index=(strpos($rilevazione, ' '));
               //dd($valore=substr($rilevazione,$index+1));
                $substr0=substr($rilevazione,$index+1); 
                $index1=strpos($substr0, ' ');
                $valore=substr($rilevazione,$index+1,$index1);
                

                $substr1=substr($substr0,$index1+1);
                $index1=strpos($substr0,' ');
                $data=substr($substr1,0,19);

                $mess=substr($substr1,20);
                


                $rilev= new \App\rilevazioni;
                $rilev->valore=$valore;
                $rilev->messaggio=$mess;
                $rilev->id_sensore=$id;
                $rilev->data_ril=$data;

                $rilev->save();
               
        }
        
        

        
        return $next($request);
    }
}
