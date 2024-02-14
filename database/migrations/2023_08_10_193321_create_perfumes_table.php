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
        Schema::create('perfumes', function (Blueprint $table) {
            $table->id();
            $table->string('perfume_name')->nullable();
            $table->text('perfume_image')->nullable();
            $table->integer('perfume_price')->nullable();
            $table->integer('perfume_discounted_price')->nullable();
            $table->text('perfume_description')->nullable();
            $table->text('perfume_black')->nullable();
            $table->text('perfume_brown')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('perfumes');
    }
};
