<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Raffles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    Schema::create('raffles', function (Blueprint $table) {
      $table->id();
      $table->string('fname');
      $table->string('phone');
      $table->string('eid');
      $table->string('itemno');
      $table->string('nvalid');
      $table->string('ipaddr');
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
        Schema::dropIfExists('raffles');
    }
}
