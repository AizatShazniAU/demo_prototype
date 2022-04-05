<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJadualsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jaduals', function (Blueprint $table) {
            $table->id();

            $table->string('lesen_id')->nullable();
            $table->string('date')->nullable();
            $table->string('title')->nullable();
            $table->string('time')->nullable();
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
        Schema::dropIfExists('jaduals');
    }
}
