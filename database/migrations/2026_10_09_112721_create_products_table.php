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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('slug')->unique();
            $table->string('name');
            $table->string('tag');
            $table->string('category')->index();
            $table->unsignedInteger('price');
            $table->unsignedInteger('old_price')->nullable();
            $table->string('unit');
            $table->string('image');
            $table->text('description');
            $table->json('specs');
            $table->unsignedSmallInteger('sort_order')->default(0);
            $table->unsignedTinyInteger('featured_position')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
