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
        Schema::create('tshirts', function (Blueprint $table) {
            $table->id();
            $table->string('tshirt_name')->nullable();
            $table->integer('tshirt_price')->nullable();
            $table->text('tshirt_description')->nullable();
            $table->string('tshirt_discounted_price')->nullable();
            $table->integer('tshirt_quantity')->nullable();

            $table->string('tshirt_size_small')->nullable();
            $table->string('tshirt_size_medium')->nullable();
            $table->string('tshirt_size_large')->nullable();
            $table->string('tshirt_size_xlarge')->nullable();
            $table->text('tshirt_image')->nullable();
            $table->string('uploaded_by')->nullable();





            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tshirts');
    }
};
