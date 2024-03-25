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
        Schema::create('productousus', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->float('precio');
            $table->string('descripcion');
            $table->string('imagen')->nullable();
            $table->boolean('activo')->default(false);
            $table->date('fechaSubida')->default(date('Y-m-d'));
            $table->unsignedBigInteger('categoria_id');
            $table->unsignedBigInteger('usuario_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productousus');
    }
};
