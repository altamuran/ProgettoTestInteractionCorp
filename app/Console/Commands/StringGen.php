<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class StringGen extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'StringGen';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'generatore di stringhe sensori';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
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
        //altimetro    
                case '4':
                $rilevazione=mt_rand(0 , 10000)/10;
                break;
        //pluviometro    
                case '5':
                $rilevazione=mt_rand(0 , 10000)/100;
                break;
        //solarimetro    
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
        $fp=fopen("./rilevazioni.txt","wr+");

        fwrite($fp,$content);
        
        fclose($fp);

        

    }
    
}
