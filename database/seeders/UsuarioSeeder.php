<?php

namespace Database\Seeders;

use App\Models\Usuario;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Usuario::create([
            'nombre' => 'roberto',
            'password' => Hash::make('1234'),
            'correo' => 'roberto@gmail.com',
            'calle' => 'Mayor',
            'numeroCalle' => '98',
            'codigoPostal' => 3690,
            'provincia'=>'Alicante',
            'telefono'=>'6010257512',
            'latitud' => 38.39,
            'longitud' => -0.52,
            'avatar' => 'storage/usuarios/avatar1.jpg',
            'me'=>false,
        ]);

        Usuario::create([
            'nombre' => 'pablo',
            'password' => Hash::make('1234'),
            'correo' => 'pablo@gmail.com',
            'calle' => 'Mayor',
            'provincia'=>'Alicante',
            'numeroCalle' => '98',
            'codigoPostal' => 8855,
            'telefono'=>'6010254542',
            'latitud' => 38.39,
            'longitud' => -0.52,
            'avatar' => 'storage/usuarios/avatar2.jpg',
            'me'=>false,
        ]);

        Usuario::create([
            'nombre' => 'alejandra',
            'password' => Hash::make('1234'),
            'correo' => 'alejandra@gmail.com',
            'calle' => 'Mayor',
            'provincia'=>'Alicante',
            'numeroCalle' => '98',
            'codigoPostal' => 5454,
            'telefono'=>'6014545455',
            'latitud' => 38.39,
            'longitud' => -0.52,
            'avatar' => 'storage/usuarios/avatar3.jpg',
            'me'=>false,
        ]);
    }
}
