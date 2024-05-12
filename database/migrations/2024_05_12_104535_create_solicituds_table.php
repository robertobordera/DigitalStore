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
        Schema::create('solicituds', function (Blueprint $table) {
            $table->id();
            $table->dateTime('fecha')->default(date('Y-m-d H:i:s'));
            $table->unsignedBigInteger('usuario_enviador_id');
            $table->unsignedBigInteger('usuario_receptor_id');
            $table->unsignedBigInteger('productousu_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('solicituds');
    }
};
