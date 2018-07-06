<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoryPaymentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category_payment', function (Blueprint $table) {
            $table->increments('id');
            $table->string('branchcode', 255);
            $table->string('name_payment', 255);
            $table->string('note_payment', 255);
            $table->string('dp', 255);
            $table->string('kpr', 255);
            $table->string('disc', 255);
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
        Schema::dropIfExists('category_payment');
    }
}
