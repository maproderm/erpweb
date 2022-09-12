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
            $table->string('stock_inventory')->nullable();
            $table->unsignedBigInteger('division_id')->index();
            $table->foreign('division_id')->references('id')->on('imaq_division')->onDelete('cascade');
            $table->unsignedBigInteger('category_id')->index();
            $table->foreign('category_id')->references('id')->on('imaq_categories')->onDelete('cascade');
            $table->unsignedBigInteger('level_area_id')->index()->nullable();
            $table->foreign('level_area_id')->references('id')->on('imaq_levels_area')->onDelete('cascade');
            $table->string('sku_product_inventory')->unique()->nullable();
            $table->string('barcode_product_inventory')->unique()->nullable();
            $table->unsignedBigInteger('provider_id')->index()->nullable();
            $table->foreign('provider_id')->references('id')->on('users')->onDelete('cascade');
            $table->unsignedBigInteger('brand_id')->index();
            $table->foreign('brand_id')->references('id')->on('imaq_brands')->onDelete('cascade');
            $table->unsignedBigInteger('unit_of_measurement_id')->index()->nullable();
            $table->foreign('unit_of_measurement_id')->references('id')->on('imaq_unit_of_measurement')->onDelete('cascade');
            $table->unsignedBigInteger('size_product_inventory')->index()->nullable();
            $table->foreign('size_product_inventory')->references('id')->on('imaq_size')->onDelete('cascade');
            $table->unsignedBigInteger('type_of_material_id')->index()->nullable();
            $table->foreign('type_of_material_id')->references('id')->on('imaq_type_of_material')->onDelete('cascade');
            $table->unsignedBigInteger('key_sat_unit_inventory')->index()->nullable();
            $table->foreign('key_sat_unit_inventory')->references('id')->on('imaq_sat_key_u')->onDelete('cascade');
            $table->unsignedBigInteger('key_sat_product_inventory')->index()->nullable();
            $table->foreign('key_sat_product_inventory')->references('id')->on('sat_clase')->onDelete('cascade');
            $table->string('minimum_inventory')->nullable();
            $table->float('unit_cost_inventory')->nullable();
            $table->float('suggested_sale_inventory')->nullable();
            $table->float('price_product_inventory')->nullable();
            $table->string('description_product_inventory')->nullable();
            $table->tinyInteger('status')->default(1)->comment('0:En Revision 1:Activo 2:Rechazado 3:Inactivo');
            $table->string('comment')->nullable();
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
