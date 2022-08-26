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
        Schema::create('imaq_box_area', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('level_area_id')->index()->nullable();
            $table->foreign('level_area_id')->references('id')->on('imaq_levels_area')->onDelete('cascade');
            $table->string('name');
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
        Schema::dropIfExists('imaq_box_area');
    }
};
