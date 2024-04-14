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
        Schema::create('comentariousus', function (Blueprint $table) {
            $table->id();
            $table->string('comentario');
            $table->date('fecha')->default(date('Y-m-d H:i'));
            $table->boolean('editado')->default(false);
            $table->unsignedBigInteger('productousu_id');
            $table->unsignedBigInteger('usuario_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comentariousus');
    }
};
