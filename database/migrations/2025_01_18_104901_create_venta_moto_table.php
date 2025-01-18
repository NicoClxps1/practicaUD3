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
        Schema::create('venta_moto', function (Blueprint $table) {
            $table->id(); // ID único de la relación
            $table->unsignedBigInteger('venta_id'); // FK con 'ventas'
            $table->foreign('venta_id')->references('id')->on('ventas')->onDelete('cascade');
            $table->unsignedBigInteger('moto_id'); // FK con 'motos'
            $table->foreign('moto_id')->references('id')->on('motos')->onDelete('cascade');
            $table->timestamps(); // Campos created_at y updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('venta_moto');
    }
};
