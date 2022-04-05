<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSysConsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sys_cons', function (Blueprint $table) {
            $table->id();

            $table->string('conType')->nullable();
            $table->string('codeApp')->nullable();
            $table->string('linCh')->nullable();
            $table->string('userAcc')->nullable();

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
        Schema::dropIfExists('sys_cons');
    }
}
