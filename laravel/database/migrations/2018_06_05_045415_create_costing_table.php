<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCostingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('costing', function (Blueprint $table) {
            $table->increments('id');
            $table->string('branchcode', 255);
            $table->string('code_customer')->references('code_customer')->on('t101s');
            $table->string('name', 255);
            $table->string('address', 255);
            $table->string('city_code', 255);
            $table->string('email', 255);
            $table->string('ktp', 255);
            $table->string('npwp', 255);
            $table->string('phone', 255);
            $table->string('phone2', 255);
            $table->timestamp();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('costing');
    }
}
