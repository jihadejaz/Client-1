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
        Schema::create('products_models', function (Blueprint $table) {
            $table->id('product_id');

            $table->string('product_title')->nullable();
            $table->text('product_image')->nullable();
            $table->text('product_description')->nullable();
            $table->integer('product_stock')->nullable();
            $table->float('product_price')->nullable();
            $table->float('product_discount')->nullable();
            $table->string('product_category')->nullable();
            $table->string('product_type')->nullable();
            $table->string('product_size')->nullable();
            $table->string('product_color')->nullable();
            
            $table->timestamps();

            // // TSHIRT CONTENT 
            // $table->string('tshirt_name')->nullable();
            // $table->integer('tshirt_price')->nullable();
            // $table->text('tshirt_description')->nullable();
            // $table->string('tshirt_discounted_price')->nullable();
            // $table->integer('tshirt_quantity')->nullable();

            // $table->string('tshirt_size_small')->nullable();
            // $table->string('tshirt_size_medium')->nullable();
            // $table->string('tshirt_size_large')->nullable();
            // $table->string('tshirt_size_xlarge')->nullable();
            // $table->text('tshirt_image')->nullable();

            // // BAGS CONTENT 

            // $table->string('bag_name')->nullable();
            // $table->text('bag_image')->nullable();
            // $table->integer('bag_price')->nullable();
            // $table->integer('bag_discounted_price')->nullable();
            // $table->text('bag_description')->nullable();

            // // PERFUMES CONTENT 

            // $table->string('perfume_name')->nullable();
            // $table->text('perfume_image')->nullable();
            // $table->integer('perfume_price')->nullable();
            // $table->integer('perfume_discounted_price')->nullable();
            // $table->text('perfume_description')->nullable();
            // $table->text('perfume_black')->nullable();
            // $table->text('perfume_brown')->nullable();

            // // GLASSES CONTENT 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products_models');
    }
};
