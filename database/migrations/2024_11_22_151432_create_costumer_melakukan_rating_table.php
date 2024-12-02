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
        Schema::create('customer_melakukan_rating', function (Blueprint $table) {
            $table->id(); // ID otomatis
            $table->unsignedBigInteger('customer_id'); // ID Pelanggan
            $table->string('customer_name'); // Nama Pelanggan
            $table->unsignedBigInteger('order_id'); // ID Pesanan
            $table->tinyInteger('rating'); // Rating (1-5)
            $table->text('review')->nullable(); // Ulasan
            $table->date('rating_date'); // Tanggal Rating
            $table->timestamps(); // Timestamps untuk created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customer_melakukan_rating');
    }
};
