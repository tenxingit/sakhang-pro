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
            $table->integer('building_id');          
            $table->integer('derim_id');        
            $table->integer('staff_id');
            $table->tinyInteger('Delete_tab');
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
        Schema::dropIfExists('leshak');
    }
};
