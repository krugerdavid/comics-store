<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('category_id')->nullable();
            $table->string('name');
            $table->string('slug');
            $table->boolean('release');
            $table->boolean('offer');
            $table->text('intro')->nullable();
            $table->text('description')->nullable();
            $table->boolean('presale');
            $table->boolean('featured');
            $table->boolean('status');
            $table->text('filename')->nullable();
            $table->text('image_small_url')->nullable();
            $table->text('image_small_path')->nullable();
            $table->text('image_big_url')->nullable();
            $table->text('image_big_path')->nullable();
            $table->unsignedBigInteger('product_status_id')->nullable();
            $table->unsignedBigInteger('demography_id')->nullable();
            $table->foreign('category_id')->references('id')->on('category');
            $table->foreign('demography_id')->references('id')->on('demography');
            $table->foreign('product_status_id')->references('id')->on('product_statuses');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
