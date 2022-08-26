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
        Schema::create('imaq_inventory', function (Blueprint $table) {
            $table->id();
            $table->string('name_product_inventory');
            $table->string('amount_product_inventory')->nullable();
            $table->unsignedBigInteger('division_id')->index();
            $table->foreign('division_id')->references('id')->on('imaq_division')->onDelete('cascade');
            $table->unsignedBigInteger('category_id')->index();
            $table->foreign('category_id')->references('id')->on('imaq_categories')->onDelete('cascade');
            $table->string('location_product_inventory')->nullable();
            $table->string('sku_product_inventory')->unique()->nullable();
            $table->string('barcode_product_inventory')->unique()->nullable();
            $table->unsignedBigInteger('provider_id')->index()->nullable();
            $table->foreign('provider_id')->references('id')->on('users')->onDelete('cascade');
            $table->unsignedBigInteger('brand_id')->index();
            $table->foreign('brand_id')->references('id')->on('imaq_brands')->onDelete('cascade');
            $table->unsignedBigInteger('unit_of_measurement_id')->index()->nullable();
            $table->foreign('unit_of_measurement_id')->references('id')->on('imaq_unit_of_measurement')->onDelete('cascade');
            $table->string('size_product_inventory')->nullable();
            $table->unsignedBigInteger('type_of_material_id')->index()->nullable();
            $table->foreign('type_of_material_id')->references('id')->on('imaq_type_of_material')->onDelete('cascade');
            $table->unsignedBigInteger('key_sat_unit_inventory')->index()->nullable();
            $table->foreign('key_sat_unit_inventory')->references('id')->on('imaq_sat_key_u')->onDelete('cascade');
            $table->string('key_sat_product_inventory')->nullable();
            $table->string('minimum_inventory')->nullable();
            $table->float('unit_cost_inventory')->nullable();
            $table->float('suggested_sale_inventory')->nullable();
            $table->float('price_product_inventory')->nullable();
            $table->string('description_product_inventory')->nullable();
            $table->tinyInteger('status')->default(1);
            $table->softDeletes();
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
        Schema::dropIfExists('imaq_inventory');
    }
};
