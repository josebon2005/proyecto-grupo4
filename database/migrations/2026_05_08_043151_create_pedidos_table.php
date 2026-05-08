<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('pedidos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('comprador_id')->constrained('users')->cascadeOnDelete();
            $table->foreignId('comercio_id')->constrained('comercios')->cascadeOnDelete();
            $table->decimal('total', 10, 2)->default(0);
            $table->enum('estado', [
                'pendiente',
                'confirmado',
                'en_camino',
                'entregado',
                'cancelado'
            ])->default('pendiente');
            $table->string('direccion_entrega');
            $table->text('notas')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('pedidos');
    }
};
