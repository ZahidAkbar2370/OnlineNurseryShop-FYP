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
            $table->foreignId("category_id");
            $table->string("item_name");
            $table->string("sale_price");
            $table->string("discount_price")->default(0);
            $table->longText("description");
            $table->enum("status", ["in_stock", "out_of_stock"]);
            $table->string("image_1")->default("product_image_default.png");
            $table->string("image_2")->nullable();
            $table->string("image_3")->nullable();
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
