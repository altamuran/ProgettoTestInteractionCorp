<?php

use Illuminate\Database\Seeder;

class RilevazioniSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
   public function run()
    {
        factory(App\rilevazioni::class, 20)->create();
    }
}
