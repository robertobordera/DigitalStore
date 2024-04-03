<?php

namespace Database\Seeders;

use App\Models\Comentariousu;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ComentariousuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Comentariousu::create([
            'comentario' => '¿El precio es negociable?',
            'productousu_id' => 4,
            'usuario_id'=> 1
        ]);

        Comentariousu::create([
            'comentario' => '¿Haces envios?',
            'productousu_id' => 5,
            'usuario_id'=> 1
        ]);

        Comentariousu::create([
            'comentario' => 'Me interesa',
            'productousu_id' => 5,
            'usuario_id'=> 2
        ]);

        Comentariousu::create([
            'comentario' => 'Cuando podemos quedar',
            'productousu_id' => 5,
            'usuario_id'=> 1
        ]);
    }
}
