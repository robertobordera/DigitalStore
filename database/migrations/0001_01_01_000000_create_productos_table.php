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
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->string('marcaModelo');
            $table->longText('imagen')->nullable();
            $table->float('precio');
            $table->string('entrega');
            $table->string('descripcion');
            $table->string('caracteristicas');
            $table->boolean('oferta')->default(false);
            $table->boolean('activo')->default(false);
            $table->unsignedBigInteger('categoria_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productos');
    }
};
