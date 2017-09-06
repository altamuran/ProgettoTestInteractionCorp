<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAmbientisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ambienti', function (Blueprint $table) {
            $table->increments('id')->index()->unsigned();
            $table->string('descrizione');
            $table->integer('user')->unsigned();
            $table->timestamps();

            $table->foreign('user')->references('id')->on('Users')->onDelete('cascade');


            

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ambienti');
    }
}
