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
            $table->string('product_no')->unique();
            $table->string('product_name');
            $table->decimal('unit_price', 8, 2)->
            default(0.00);
            $table->string('product_image')->nullable();
            $table->enum('status', ['active', 'inactive'])->
            default('active');
            $table->foreignId('category_id')->
            constrained('categories')->onDelete('cascade');
            $table->softDeletes();
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
