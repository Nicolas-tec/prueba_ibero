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
        Schema::create('inventario', function (Blueprint $table) {
            $table->id();
             $table->string('Nombre_producto');
             $table->string('Precio');
             $table->string('Descripcion');
             $table->string('Tipo');
             $table->string('stock');
             $table->string('Fecha_creacion');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inventario');
    }
};
