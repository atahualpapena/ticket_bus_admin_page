<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TableTrans extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trans', function (Blueprint $table){
            $table->increments('idtrans');
            $table->string('transnumber',45);
            $table->integer('user_iduser');
            $table->dateTime('paymentdate');
            $table->decimal('amount',12,2);
            $table->integer('cclastfourdigits');
            $table->string('cctype',45);  
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
        Schema::dropIfExists('trans');
    }
}
