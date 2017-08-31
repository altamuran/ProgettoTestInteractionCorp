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
        
            $table->increments('id')->index();
            $table->string('identificatore');
            $table->integer('codice');
            $table->string('info');
            $table->unsignedInteger('ambiente')->unsiged();
            $table->unsignedInteger('user')->unsiged();

            
                    //vincolo integrità
            $table->foreign('user')->references('id')->on('users')->onDelete('cascade');
            Schema::disableForeignKeyConstraints();
            $table->foreign('ambiente')->references('id')->on('ambienti')->onDelete('cascade');
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
