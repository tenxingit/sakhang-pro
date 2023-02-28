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
        Schema::create('leshak', function (Blueprint $table) {
            $table->ID();
            $table->integer('HouseNo');
            $table->unsignedBigInteger('BuildingID');
            $table->foreign('BuildingID')->references('id')->on('building');
            $table->unsignedBigInteger('DerimID');
            $table->foreign('DerimID')->references('id')->on('derim');
            $table->unsignedBigInteger('StaffID');
            $table->foreign('StaffID')->references('id')->on('staff');
            $table->tinyInteger('Delete_tab');
        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('leshak');
    }
};
