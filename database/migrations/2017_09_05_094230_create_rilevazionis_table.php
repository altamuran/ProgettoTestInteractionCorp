<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRilevazionisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rilevazioni', function (Blueprint $table) {

            $table->increments('id')->unsiged();
            $table->string('valore',30);
            $table->string('messaggio');
            $table->unsignedInteger('id_sensore')->unsiged();
            $table->dateTime('data_ril');

            Schema::disableForeignKeyConstraints();
            $table->foreign('id_sensore')->references('id')->on('sensori')->onDelete('cascade');


            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rilevazioni');
    }
}
