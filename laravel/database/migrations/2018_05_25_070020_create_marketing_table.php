<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMarketingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('marketing', function (Blueprint $table) {
            $table->increments('id');
            $table->string('branchcode',255);
            $table->string('code',255);
            $table->string('email',255);
            $table->string('password',255);
            $table->string('api_token',255);
            $table->string('name',255);
            $table->string('address',255);
            $table->string('phone',255);
            $table->string('phone2',255);
            $table->string('ktp',255);
            $table->string('npwp',255);
            $table->string('reveral_code',255);
            $table->string('komisi',255);
            $table->string('agent',255);
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
        Schema::dropIfExists('marketing');
    }
}
