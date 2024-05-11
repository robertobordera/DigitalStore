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
            'precio' => 340.44,
            'entrega' => 'mañana',
            'descripcion' => 'Tarjeta grafica',
            'caracteristicas' => 'muchas',
            'oferta' => false,
            'activo' => true,
            'categoria_id' => 1
        ]);

        Producto::create([
            'marcaModelo' => 'Nvidia gtx 1080ti',
            'precio' => 567.44,
            'entrega' => 'mañana',
            'descripcion' => 'Tarjeta grafica',
            'caracteristicas' => 'muchas',
            'oferta' => false,
            'activo' => true,
            'categoria_id' => 1
        ]);

        Producto::create([
            'marcaModelo' => 'Nvidia gtx 3060ti',
            'precio' => 789.49,
            'entrega' => 'mañana',
            'descripcion' => 'Tarjeta grafica',
            'caracteristicas' => 'muchas',
            'oferta' => false,
            'activo' => true,
            'categoria_id' => 2
        ]);

        Producto::create([
            'marcaModelo' => 'Nvidia gtx 3080ti',
            'precio' => 789.41,
            'entrega' => 'mañana',
            'descripcion' => 'Tarjeta grafica',
            'caracteristicas' => 'muchas',
            'oferta' => false,
            'activo' => true,
            'categoria_id' => 4
        ]);

        Producto::create([
            'marcaModelo' => 'Intel i5',
            'precio' => 789.49,
            'entrega' => 'mañana',
            'descripcion' => 'Tarjeta grafica',
            'caracteristicas' => 'muchas',
            'oferta' => false,
            'activo' => true,
            'categoria_id' => 6
        ]);


        Producto::create([
            'marcaModelo' => 'lg ultragear',
            'precio' => 789.43,
            'entrega' => 'mañana',
            'descripcion' => 'Tarjeta grafica',
            'caracteristicas' => 'muchas',
            'oferta' => false,
            'activo' => true,
            'categoria_id' => 2
        ]);

        Producto::create([
            'marcaModelo' => 'Nvidia gtx 3060ti',
            'precio' => 789.45,
            'entrega' => 'mañana',
            'descripcion' => 'Tarjeta grafica',
            'caracteristicas' => 'muchas',
            'oferta' => false,
            'activo' => true,
            'categoria_id' => 2
        ]);

        Producto::create([
            'marcaModelo' => 'Nvidia gtx 3060ti',
            'precio' => 789.45,
            'entrega' => 'mañana',
            'descripcion' => 'Tarjeta grafica',
            'caracteristicas' => 'muchas',
            'oferta' => false,
            'activo' => true,
            'categoria_id' => 2
        ]);

        Producto::create([
            'marcaModelo' => 'Nvidia gtx 3060ti',
            'precio' => 789.42,
            'entrega' => 'mañana',
            'descripcion' => 'Tarjeta grafica',
            'caracteristicas' => 'muchas',
            'oferta' => false,
            'activo' => true,
            'categoria_id' => 2
        ]);

        Producto::create([
            'marcaModelo' => 'lg ultragear',
            'precio' => 789.47,
            'entrega' => 'mañana',
            'descripcion' => 'Tarjeta grafica',
            'caracteristicas' => 'muchas',
            'oferta' => false,
            'activo' => true,
            'categoria_id' => 2
        ]);
    }
}
