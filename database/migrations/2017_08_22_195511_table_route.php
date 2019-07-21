<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TableRoute extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('route', function (Blueprint $table){
            $table->increments('idroute');
            $table->integer('iddepartlocation');
            $table->integer('idarrivallocation');
            $table->dateTime('departtime');
            $table->dateTime('arrivaltime');
            $table->decimal('price',12,2);
            $table->integer('bus_idbus'); 
            $table->integer('stops_idstop');
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
        Schema::dropIfExists('route');
    }
}
