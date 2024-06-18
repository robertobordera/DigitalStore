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
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('password');
            $table->string('correo')->unique();
            $table->string('calle');
            $table->string('numeroCalle');
            $table->string('codigoPostal');
            $table->string('provincia');
            $table->string('telefono')->nullable();
            $table->float('latitud')->nullable();
            $table->float('longitud')->nullable();
            $table->string('avatar')->nullable();
            $table->boolean('me')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuarios');
    }
};
