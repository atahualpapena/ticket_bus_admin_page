<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TableStop extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stop', function (Blueprint $table){
            $table->increments('idstop');
            $table->string('name',45);
            $table->integer('city_idcity');
            $table->decimal('latitude',11,8);
            $table->decimal('longitude',11,8); 
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
        Schema::dropIfExists('stop');
    }
}
