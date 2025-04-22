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
            $table->string('name')->max(255)->required();
            $table->string('slug')->max(255)->unique();
            $table->text('description')->nullable();
            $table->string('sku')->max(255)->unique();
            $table->decimal('price', 10, 2)->default(0);
            $table->integer('stok')->default(0);
            $table->unsignedBigInteger('product_category_id')->nullable();
            $table->foreign('product_category_id')
            ->references('id')
            ->on('product_categories')
            ->onDelete('set null')
            ->onUpdate('cascade');
            $table->string('image_url')->max(255)->nullable();
            $table->boolean('is_active')->dafault(true);
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
