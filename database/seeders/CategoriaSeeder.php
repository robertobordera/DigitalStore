<?php

namespace Database\Seeders;

use App\Models\Categoria;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Categoria::create([
            'nombre' => 'moviles'
        ]);

        Categoria::create([
            'nombre' => 'portatiles'
        ]);

        Categoria::create([
            'nombre' => 'televisiones'
        ]);

        Categoria::create([
            'nombre' => 'tablets'
        ]);

        Categoria::create([
            'nombre' => 'CPU'
        ]);

        Categoria::create([
            'nombre' => 'TarjetasGraficas'
        ]);

        Categoria::create([
            'nombre' => 'PlacaBase'
        ]);
    }
}
