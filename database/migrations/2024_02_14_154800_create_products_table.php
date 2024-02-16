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
            $table->text("description");
            $table->enum("status", ["published", "pending"])->default("published");
            $table->foreignId('category_id')->references('id')->on('categories');
            $table->unsignedBigInteger("price");
            $table->unsignedInteger("weight");
            $table->text("img_url");
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
