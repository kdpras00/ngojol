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
        Schema::create('costumer_order', function (Blueprint $table) {
            $table->id();
            $table->string('customer_name');
            $table->string('email');
            $table->date('order_date');
            $table->decimal('total_price', 10, 2);
            $table->enum('status', ['Diproses', 'Dikirim', 'Selesai', 'Dibatalkan', 'Menunggu Pembayaran'])->default('Menunggu Pembayaran'); // Status Pesanan
            $table->string('payment_method');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('costumer_order');
    }
};
