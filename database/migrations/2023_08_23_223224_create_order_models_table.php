<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
         Schema::create('order_models', function (Blueprint $table) {
            $table->id('order_id');
            $table->text('order_number')->nullable();

            $table->string('ordered_by')->nullable();
            $table->text('address')->nullable();
            $table->text('phone')->nullable();

            $table->string('product_name')->nullable();
            $table->integer('quantity_ordered')->nullable();
            $table->float('bill')->nullable();
            $table->string('ordered_color')->nullable();
            $table->string('ordered_size')->nullable();
            $table->text('image')->nullable();
            $table->integer('product_id')->nullable();
            $table->float('actual_product_price')->nullable();

            $table->string('delivery_status')->nullable();



            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_models');
    }
};
