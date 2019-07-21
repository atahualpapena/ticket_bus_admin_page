<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TableTrip extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trip', function (Blueprint $table){
            $table->increments('idtrip');
            $table->integer('seatssold');
            $table->integer('seatsboarded');
            $table->string('details');
            $table->integer('bus_idbus');
            $table->decimal('driver_iddriver',12,2);
            $table->integer('route_idroute');  
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
        Schema::dropIfExists('trip');
    }
}
