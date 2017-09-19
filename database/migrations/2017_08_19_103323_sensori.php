<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Sensori extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('sensori', function (Blueprint $table) {
        
            $table->increments('id')->index()->unsiged();
            $table->string('tipo',30);
            $table->string('marca',20);
            $table->unsignedInteger('ambiente')->unsiged();
            
            $table->foreign('ambiente')->references('id')->on('ambienti')->onDelete('cascade');
            
            Schema::disableForeignKeyConstraints();
        });



    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {   
        //Schema::table('sensori', function (Blueprint $table){
        //$table->dropForeign('user');
        //$table->dropForeign('ambienti');
        //});

        Schema::dropIfExists('sensori');

    }
}
