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
            'contraseña' => Hash::make('1234'),
            'correo' => 'roberto@gmail.com',
            'calle' => 'Mayor',
            'numeroCalle' => '98',
            'codigoPostal' => 3690,
            'latitud' => 65.4,
            'longitud' => 78.5,
            'me'=>true,
        ]);

        Usuario::create([
            'nombre' => 'pablo',
            'contraseña' => Hash::make('1234'),
            'correo' => 'pablo@gmail.com',
            'calle' => 'Mayor',
            'numeroCalle' => '98',
            'codigoPostal' => 8855,
            'latitud' => 65.4,
            'longitud' => 78.5,
            'me'=>false,
        ]);

        Usuario::create([
            'nombre' => 'alejandra',
            'contraseña' => Hash::make('1234'),
            'correo' => 'alejandra@gmail.com',
            'calle' => 'Mayor',
            'numeroCalle' => '98',
            'codigoPostal' => 5454,
            'latitud' => 65.4,
            'longitud' => 78.5,
            'me'=>false,
        ]);
    }
}
