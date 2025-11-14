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
        //table transaksi
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->integer("quantity");
            $table->integer("total_price");
            $table->timestamps();


            // foreign key agar table terhubung ke table product
            $table->foreignId('product_id')->references("id")->on('products');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('transactions', function (Blueprint $table) {
            $table->dropForeign(['product_id']);
        });
        Schema::dropIfExists('transactions');
    }
};
