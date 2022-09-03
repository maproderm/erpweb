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
        Schema::create('imaq_levels_area', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('division_id')->index()->nullable();
            $table->foreign('division_id')->references('id')->on('imaq_division')->onDelete('cascade');
            $table->unsignedBigInteger('areas_section_id')->index()->nullable();
            $table->foreign('areas_section_id')->references('id')->on('imaq_areas_section')->onDelete('cascade');
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
        Schema::dropIfExists('imaq_levels_area');
    }
};
