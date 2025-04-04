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
        Schema::create('contactos', function (Blueprint $table) {
            $table->id(); // Campo de ID
            $table->string('nombre'); // Campo para el nombre del contacto
            $table->string('email')->unique(); // Campo para el email, debe ser único
            $table->string('telefono'); // Campo para el teléfono
            $table->timestamps(); // Campos created_at y updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contactos');
    }
};
