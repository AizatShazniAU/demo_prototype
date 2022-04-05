<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCerKesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cer_kes', function (Blueprint $table) {
            $table->id();

            $table->string('speaker')->nullable();
            $table->string('time')->nullable();
            $table->string('date')->nullable();
            $table->string('loc')->nullable();

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
        Schema::dropIfExists('cer_kes');
    }
}
