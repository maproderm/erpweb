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
        Schema::create('imaq_employees', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->index();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('code');
            $table->string('internal_number');
            $table->string('image');
            $table->string('address');
            $table->string('phone');
            $table->string('gender');
            $table->string('birthday');
            $table->string('rfc');
            $table->string('curp');
            $table->string('state_id');
            $table->string('municipaly_id');
            $table->string('date_register');
            $table->string('type_blood');
            $table->string('weight');
            $table->string('height');
            $table->string('emergency_phone');
            $table->string('nns');
            $table->string('current_condition');
            $table->string('area_type_id');
            $table->string('bank_id');
            $table->string('card_number');
            $table->string('type_account_bank');
            $table->string('status');
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
        Schema::dropIfExists('imaq_employees');
    }
};
