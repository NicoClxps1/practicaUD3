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
        Schema::create('modelos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre'); // Nombre del modelo
            $table->text('descripcion')->nullable(); // Descripción opcional
            $table->string('cilindrada'); // Cilindrada (600cc, 1000cc, etc.)
            $table->string('tipo_motor'); // Tipo de motor
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('modelos');
    }
};
