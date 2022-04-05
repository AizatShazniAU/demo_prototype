<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIvRegsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('iv_regs', function (Blueprint $table) {
            $table->id();

            $table->string('appName')->nullable();
            $table->string('date')->nullable();
            $table->string('phoneNo')->nullable();
            $table->string('email')->nullable();
            $table->string('address')->nullable();
            $table->string('att')->nullable();

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
        Schema::dropIfExists('iv_regs');
    }
}
