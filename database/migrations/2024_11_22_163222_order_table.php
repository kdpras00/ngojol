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
        Schema::create('orders', function (Blueprint $table) {
            $table->id(); // ID otomatis
            $table->string('username'); // Nama Pengguna
            $table->date('order_date'); // Tanggal Pesanan
            $table->decimal('total_price', 10, 2); // Total Harga
            $table->enum('status', ['Diproses', 'Dikirim', 'Selesai', 'Dibatalkan', 'Menunggu Pembayaran'])->default('Menunggu Pembayaran'); // Status Pesanan
            $table->string('payment_method'); // Metode Pembayaran
            $table->timestamps(); // Timestamps untuk created_at dan updated_at
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
