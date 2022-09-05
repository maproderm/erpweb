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
        Schema::create('imaq_categories', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->tinyInteger('status')->default(1)->comment('0: Inactivo 1:Activo');
            $table->unsignedBigInteger('division_id')->index()->nullable()->comment('1:AlmacenIMaQ  2:MateriaPrima 3:ProductoTerminado');
            $table->foreign('division_id')->references('id')->on('imaq_division')->onDelete('cascade');
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
        Schema::dropIfExists('imaq_categories');
    }
};
