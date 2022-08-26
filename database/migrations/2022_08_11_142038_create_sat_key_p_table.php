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
        Schema::create('imaq_sat_key_p', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('type_sat_id');
            $table->string('division_sat_id');
            $table->string('group_sat_id');
            $table->string('clase_sat_id');
            $table->string('key');
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
        Schema::dropIfExists('imaq_sat_key_p');
    }
};
