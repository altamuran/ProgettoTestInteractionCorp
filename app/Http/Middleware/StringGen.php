<?php

namespace App\Http\Middleware;
use Closure;
use Illuminate\Support\Facades\Storage;

class StringGen
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

        $timestamp = mt_rand(1, time());    
        $randomDate = date('2017-m-d H:i:s' , $timestamp);

        $id_sensore=mt_rand(1,30);

        $if_var = random_int(1,2);
        if($if_var==1){
            $rand = random_int(1,7);
            switch ($rand) {
        //barometro
                case '1':
                $rilevazione=mt_rand(0 , 100000)/100;
                break;
        //termometro    
                case '2':
                $rilevazione=mt_rand(0 , 10000)/100;
                break;
        //igrometro    
                case '3':
                $rilevazione=mt_rand(0 , 100);
                break;
        //              
                case '4':
                $rilevazione=mt_rand(0 , 10000)/10;
                break;
        //  Pluviometro    
                case '5':
                $rilevazione=mt_rand(0 , 10000)/100;
                break;
        //  solarimetro    
                case '6':
                $rilevazione=mt_rand(0 , 100000)/100;
                break;  
        //accelerometro     
                case '7':
                $rilevazione=mt_rand(0 , 30000)/10;
                break;        
                default:
            # code...
                break;
            }
        }else
        $rand=mt_rand(1,5);
        switch ($rand) {
            case '1':
            $rilevazione='Y01';
            break;
            case '2':
            $rilevazione='Y02';
            break;
            case '3':
            $rilevazione='Y03';
            break;
            case '4':
            $rilevazione='Y04';
            break;    
            case '5':
            $rilevazione='Y05';
            break;
            default:
            # code...
            break;
        }

        $flag=strstr($rilevazione, 'Y');
        
        if($flag!=false){

            switch ($rilevazione) {
                case 'Y01':
                $messaggio='errore di rilevazione per mancanza di segnale';
                break;
                case 'Y02':
                $messaggio='rilevazione sospetta';
                break;
                case 'Y03':
                $messaggio='rilevazione non avvenuta';
                break;
                case 'Y04':
                $messaggio='sensore assente';
                break;
                case 'Y05':
                $messaggio='sensore in manutenzione';
                break;
                default:
                $messaggio='errore di rilevazione per mancanza di segnale';

                break;
            }  
        }else
        $messaggio='rilevazione avvenuta';

        $flag=(rand(1,2));
        if($flag==1)
        $content=$id_sensore.' '.$rilevazione.' ' .$randomDate.' '.$messaggio;
        else
        $content='null';

        $path=(Storage::disk('local')->getDriver()->getAdapter()->getPathPrefix());
        
         if(!file_exists($path."myText.txt")){
              die("Risorsa non disponibile");
            }else
            {
        $fp=fopen($path."myText.txt","w");
         fwrite($fp,$content);
        $rilevazione = file_get_contents($path."myText.txt");

        fclose($fp);
            }

        return $next($request);

    }
}
