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
        Schema::create('details', function (Blueprint $table) {
            $table->unsignedBigInteger('id_detail');
            $table->unsignedBigInteger('id_invoce');
            $table->primary(['id_detail', 'id_invoce']);  //$table->id('num_detalle', 'id_invoce');
            $table->unsignedBigInteger('id_product');
            $table->string('amount', 5);
            $table->decimal('price', 8,3);
            $table->foreign('id_invoce')->references('id')->on('invoces');
            $table->foreign('id_product')->references('id')->on('products');
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
        Schema::dropIfExists('detail');
    }
};
