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
        Schema::create('driver_pickup', function (Blueprint $table) {
            $table->id(); // ID otomatis
            $table->string('driver_name'); // Nama Driver
            $table->string('phone_number'); // Nomor Telepon Driver
            $table->date('pickup_date'); // Tanggal Pickup
            $table->unsignedBigInteger('order_id'); // ID Pesanan
            $table->enum('status', ['Selesai', 'Dalam Perjalanan', 'Diterima', 'Dibatalkan'])->default('Diterima'); // Status Pickup
            $table->time('pickup_time')->nullable(); // Waktu Pickup
            $table->timestamps(); // Timestamps untuk created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('driver_pickup');
    }
};
