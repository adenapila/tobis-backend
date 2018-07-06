<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUnitTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('unit', function (Blueprint $table) {
            $table->increments('id');
            $table->string('branchcode', 255);
            $table->string('code_unit', 255);
            $table->string('type_unit', 255);
            $table->string('block_unit', 255);
            $table->string('no_unit', 255);
            $table->string('lt_unit', 255);
            $table->string('lb_unit', 255);
            $table->string('status_unit', 255);
            $table->string('code_costumer', 255);
            $table->string('name_costumer', 255);
            $table->string('price', 255);
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
        Schema::dropIfExists('unit');
    }
}
