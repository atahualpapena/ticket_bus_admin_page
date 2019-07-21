<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TableDriver extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('driver', function (Blueprint $table){
            $table->increments('iddriver');
            $table->integer('drivernumber');
            $table->string('firstname',20);
            $table->string('lastname',20);
            $table->char('sex',1);
            $table->date('birthdate');
            $table->decimal('score'); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('driver');
    }
}
