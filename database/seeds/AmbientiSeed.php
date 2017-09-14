<?php

use Illuminate\Database\Seeder;

class AmbientiSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\ambienti::class, 20)->create();
    }
}
