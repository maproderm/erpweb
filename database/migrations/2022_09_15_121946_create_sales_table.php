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
        Schema::create('mpd_sales', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->index();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->unsignedBigInteger('employee_id')->index();
            $table->foreign('employee_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('num_order')->nullable();
            $table->integer('items')->default(0);
            $table->float('subtotal')->nullable();
            $table->float('discount')->nullable();
            $table->decimal('shipping',10,2)->default(0);
            $table->float('total')->nullable();
            $table->tinyInteger('status')->default(0)->comment('0:Borrador 1:Cotizacion 2:Procesando 3:Completado 4:Cancelado');
            $table->tinyInteger('payment')->default(1)->comment('0:Pendiente de pago 1:Pagado');
            $table->datetime('delivery_date')->nullable()->comment('dia del envio');
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
        Schema::dropIfExists('mpd_sales');
    }
};
