<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Valoracion;
use Carbon\Carbon;

class ValoracionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Valoracion::create([
            'comentario' => 'Esto es un comentario 1',
            'puntuacion' => 7.5,
            'fecha' => Carbon::now(),
            'producto_id' => 1,
            'usuario_id'=> 1,
        ]);
        
        Valoracion::create([
            'comentario' => 'Esto es un comentario 2',
            'puntuacion' => 7.5,
            'fecha' => Carbon::now(),
            'producto_id' => 1,
            'usuario_id'=> 2,
        ]);

        Valoracion::create([
            'comentario' => 'Esto es un comentario 3',
            'puntuacion' => 7.5,
            'fecha' => Carbon::now(),
            'producto_id' => 1,
            'usuario_id'=> 2,
        ]);

        Valoracion::create([
            'comentario' => 'Esto es un comentario 4',
            'puntuacion' => 7.5,
            'fecha' => Carbon::now(),
            'producto_id' => 2,
            'usuario_id'=> 3,
        ]);
        
    }
}
