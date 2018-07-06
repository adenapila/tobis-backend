<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReportTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('report', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 255);
            $table->string('email', 255);
            $table->string('ktp', 255);
            $table->string('npwp', 255);
            $table->string('phone', 255);
            $table->string('phone2', 255);
            $table->string('type_unit', 255);
            $table->string('block_unit', 255);
            $table->string('lt_unit', 255);
            $table->string('lb_unit', 255);
            $table->string('price', 255);
            $table->string('agent', 255);
            $table->string('status', 255);
            $table->string('created_at', 255);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('report', function (Blueprint $table) {
            //
        });
    }
}
