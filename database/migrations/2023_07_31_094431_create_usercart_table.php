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
        Schema::create('usercart', function (Blueprint $table) {
            $table->id('order_id')->nullable();

            $table->string('ordered_by')->nullable();
            $table->integer('product_id')->nullable();
            $table->string('product_name')->nullable();

            $table->integer('quantity')->nullable();
            $table->string('color')->nullable();
            $table->string('size')->nullable();


            $table->text('customer_address')->nullable();
            $table->text('customer_phone')->nullable();




            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usercart');
    }
};
