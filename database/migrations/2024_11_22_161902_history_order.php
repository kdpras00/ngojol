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
        Schema::create('history_order', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->unsignedBigInteger('user_id'); // Foreign key untuk user
            $table->unsignedBigInteger('product_id'); // Foreign key untuk produk
            $table->integer('quantity'); // Jumlah produk
            $table->decimal('total_price', 10, 2); // Total harga
            $table->timestamp('order_date'); // Tanggal pemesanan
            $table->enum('status', ['completed', 'pending', 'canceled']); // Status order
            $table->timestamps(); // created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
