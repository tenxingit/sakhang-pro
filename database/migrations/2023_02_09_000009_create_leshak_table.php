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
        Schema::create('leshaks', function (Blueprint $table) {
            $table->ID();
            $table->integer('HouseNo');
            $table->unsignedBigInteger('building_id');
            $table->foreign('building_id')->references('id')->on('buildings');
            $table->unsignedBigInteger('derim_id');
            $table->foreign('derim_id')->references('id')->on('derims');
            $table->unsignedBigInteger('staff_id');
            $table->foreign('staff_id')->references('id')->on('staffs');
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
