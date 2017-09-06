<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

use App\User;
use App\Sensori;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $this->call(UserSed::class);
        $this->call(AmbientiSeed::class);
	    $this->call(SensoriSed::class);
        
        

        $this->call(RilevazioniSeed::class);
  


	    

    }
    
        
    
}
