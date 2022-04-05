<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLesensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lesens', function (Blueprint $table) {
            $table->id();

            $table->string('appName')->nullable();
            $table->string('user_id')->nullable();
            $table->string('busName')->nullable();
            $table->string('regNo')->nullable();
            $table->string('licName')->nullable();
            $table->string('agency')->nullable();
            $table->string('licType')->nullable();
            $table->string('appType')->nullable();
            $table->string('status')->nullable();
            $table->string('attachment')->nullable();

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
        Schema::dropIfExists('lesens');
    }
}
