<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaymentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {   
        Schema::create('payment', function (Blueprint $table) {
            $table->increments('id');
            $table->string('branchcode', 5);
            $table->string('booking_no', 55);
            $table->string('code_customer', 55);
            $table->string('name_customer', 55);
            $table->string('code_unit', 55);
            $table->string('type_unit', 55);
            $table->string('price_unit', 55);
            $table->string('first_payment', 55);
            $table->string('type_payment', 55);
            $table->string('harga_trans', 55);
            $table->string('dp', 55);
            $table->string('kpr', 55);
            $table->string('cash', 55);
            $table->string('reveral_code', 55);
            $table->foreign('reveral_code')->references('id')->on('t002s');        
            $table->string('status', 55);        
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
        Schema::dropIfExists('payment');
    }
}
