<?php

use Illuminate\Database\Seeder;

class SensoriSed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Sensori::class, 10)->create();
    }
}
