<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use League\CommonMark\Reference\Reference;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('log', function (Blueprint $table) {
            $table->ID();
            $table->string('Action');
            $table->unsignedBigInteger('StaffID');
            $table->foreign('StaffID')->references('id')->on('staff');
            $table->unsignedBigInteger('ByUserID');
            $table->foreign('ByUserID')->references('id')->on('users');
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
        Schema::dropIfExists('log');
    }
};
