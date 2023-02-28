<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staffs', function (Blueprint $table) {
            $table->id();
            $table->string('Appno');
            $table->date('Appdate');
            $table->string('Name');
            $table->unsignedBigInteger('Post');
            $table->foreign('Post')->references('id')->on('post');
            $table->unsignedBigInteger('Dept');
            $table->foreign('Dept')->references('id')->on('departments');
            $table->date('Appodate');
            $table->unsignedBigInteger('Status');
            $table->foreign('Status')->references('id')->on('housingstat');
            $table->string('Remarks');
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
        Schema::dropIfExists('staff');
    }
};