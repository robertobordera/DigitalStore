<?php

namespace Database\Seeders;

use App\Models\Productousu;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class ProductousuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Productousu::create([
            'titulo'=>'Se vende Iphone X',
            'precio'=>785.78,
            'descripcion'=>'Esta nuevo',
            'activo'=>true,
            'categoria_id'=>2,
            'usuario_id'=>1
        ]);

        Productousu::create([
            'titulo'=>'Se vende coche seat cordoba',
            'precio'=>3000.78,
            'descripcion'=>'Esta nuevo',
            'activo'=>true,
            'categoria_id'=>1,
            'usuario_id'=>1
        ]);

        Productousu::create([
            'titulo'=>'Se vende Mantas',
            'precio'=>23.78,
            'descripcion'=>'Esta nuevo',
            'activo'=>true,
            'categoria_id'=>4,
            'usuario_id'=>1
        ]);

        Productousu::create([
            'titulo'=>'Se vende portatil',
            'precio'=>1000.78,
            'descripcion'=>'Esta nuevo',
            'activo'=>true,
            'categoria_id'=>2,
            'usuario_id'=>2
        ]);

        Productousu::create([
            'titulo'=>'Se vende Iphone 13',
            'precio'=>1500.78,
            'descripcion'=>'Esta nuevo',
            'activo'=>true,
            'categoria_id'=>2,
            'usuario_id'=>2
        ]);

        Productousu::create([
            'titulo'=>'Se vende tablet X',
            'precio'=>785.78,
            'descripcion'=>'Esta nuevo',
            'activo'=>true,
            'categoria_id'=>2,
            'usuario_id'=>3
        ]);
    }
}
