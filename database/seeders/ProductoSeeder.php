<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Producto;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Producto::create([
            'marcaModelo' => 'Nvidia gtx 1050ti',
            'precio' => 340.4,
            'entrega' => 'mañana',
            'descripcion' => 'Tarjeta grafica',
            'caracteristicas' => 'muchas',
            'oferta' => false,
            'activo' => true,
            'categoria_id' => 1
        ]);

        Producto::create([
            'marcaModelo' => 'Nvidia gtx 1080ti',
            'precio' => 567.4,
            'entrega' => 'mañana',
            'descripcion' => 'Tarjeta grafica',
            'caracteristicas' => 'muchas',
            'oferta' => false,
            'activo' => true,
            'categoria_id' => 1
        ]);

        Producto::create([
            'marcaModelo' => 'Nvidia gtx 3060ti',
            'precio' => 789.4,
            'entrega' => 'mañana',
            'descripcion' => 'Tarjeta grafica',
            'caracteristicas' => 'muchas',
            'oferta' => false,
            'activo' => false,
            'categoria_id' => 2
        ]);
    }
}
