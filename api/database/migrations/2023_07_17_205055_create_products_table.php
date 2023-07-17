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
            $table->string('sku');
            $table->string('name');
            $table->text('description');
            $table->string('image');            
            $table->decimal('price', $precision = 8, $scale = 2);
            $table->decimal('price_wholesale', $precision = 8, $scale = 2);
            $table->decimal('price_distributor', $precision = 8, $scale = 2);
            $table->decimal('price_box', $precision = 8, $scale = 2);
            $table->decimal('price_vip', $precision = 8, $scale = 2);
            $table->integer('pieces_by_box');
            $table->integer('stock');
            $table->integer('min_stock');
            $table->integer('disabled');

            $table->unsignedBigInteger('brand_id');            

            $table->timestamps();

            $table->foreign('brand_id')->references('id')->on('brands');
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
