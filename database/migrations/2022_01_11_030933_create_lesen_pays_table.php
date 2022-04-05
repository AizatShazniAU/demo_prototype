<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLesenPaysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lesen_pays', function (Blueprint $table) {
            $table->id();

            $table->string('lesen_id')->nullable();
            $table->string('lesenFee')->nullable();
            $table->string('payMet')->nullable();
            $table->string('date')->nullable();
            $table->string('status')->nullable();

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
        Schema::dropIfExists('lesen_pays');
    }
}
