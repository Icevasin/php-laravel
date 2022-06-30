<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableTheseller extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('TheSeller', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('SellerID');
            $table->string('SellerFirstname');
            $table->string('SellerLastname');
            $table->string('Email');
            $table->string('Phone');
            $table->string('Address');
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
        Schema::dropIfExists('TheSeller');
    }
}
