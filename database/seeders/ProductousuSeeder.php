<?php

namespace Database\Seeders;

use App\Models\Productousu;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use Carbon\Carbon;

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
            'imagen'=> 'storage/market/iphone10.jpeg',
            'descripcion'=>'¡Vendo iPhone X en excelentes condiciones! Este dispositivo cuenta con una pantalla Super Retina de 5.8 pulgadas, cámara dual de 12 MP con capacidad de grabación en 4K, y el potente chip A11 Bionic para un rendimiento fluido. El teléfono tiene 64 GB de almacenamiento y viene con iOS actualizado.',
            'activo'=>true,
            'fechaSubida' =>Carbon::now()->format('Y-m-d H:i'),
            'categoria_id'=>2,
            'usuario_id'=>1
        ]);

        Productousu::create([
            'titulo'=>'Se vende play 4',
            'precio'=>238.78,
            'imagen'=> 'storage/market/ps4.jpg',
            'descripcion'=>'Estoy vendiendo mi querida PlayStation 4 (PS4). Ha sido mi fiel compañera durante estos últimos años, pero ha llegado el momento de despedirme y darle una nueva casa donde pueda seguir trayendo alegría a alguien más.',
            'activo'=>true,
            'fechaSubida' =>Carbon::now()->format('Y-m-d H:i'),
            'categoria_id'=>1,
            'usuario_id'=>1
        ]);

        Productousu::create([
            'titulo'=>'Se vende battlefield 4',
            'precio'=>13.28,
            'imagen'=> 'storage/market/battlefield4.jpg',
            'descripcion'=>' ¡Prepárate para la acción con este emocionante juego de disparos en primera persona! Sumérgete en intensas batallas multijugador y vive una experiencia de juego emocionante.',
            'activo'=>true,
            'fechaSubida' =>Carbon::now()->format('Y-m-d H:i'),
            'categoria_id'=>4,
            'usuario_id'=>1
        ]);

        Productousu::create([
            'titulo'=>'Se vende portatil viejo',
            'precio'=>150.78,
            'imagen'=> 'storage/market/portatilP.jpg',
            'descripcion'=>'Estoy vendiendo mi portátil equipado con un procesador Intel Pentium. Este portátil ha sido mi herramienta confiable para el trabajo y el entretenimiento, pero ahora estoy listo para pasar a un modelo más avanzado y quiero que esta joya encuentre un nuevo hogar.',
            'activo'=>true,
            'fechaSubida' =>Carbon::now()->format('Y-m-d H:i'),
            'categoria_id'=>2,
            'usuario_id'=>2
        ]);

        Productousu::create([
            'titulo'=>'Se vende Iphone 13',
            'precio'=>1100.78,
            'imagen'=> 'storage/market/iphone13.jpg',
            'descripcion'=>'Estoy vendiendo mi iPhone 13, una verdadera joya de la tecnología que ha sido mi fiel compañero en todas partes. Este dispositivo de Apple combina un diseño elegante con un rendimiento potente, ofreciendo una experiencia incomparable tanto para el trabajo como para el entretenimiento.',
            'activo'=>true,
            'fechaSubida' =>Carbon::now()->format('Y-m-d H:i'),
            'categoria_id'=>2,
            'usuario_id'=>2
        ]);

        Productousu::create([
            'titulo'=>'Se vende mando ps5',
            'precio'=>49.99,
            'imagen'=> 'storage/market/mandops5.jpg',
            'descripcion'=>'Estoy vendiendo un mando de PlayStation 5 (PS5), el compañero perfecto para tus aventuras de gaming en la consola de próxima generación de Sony. Este mando ofrece una experiencia de juego inmersiva y cómoda, con tecnología innovadora y un diseño ergonómico que se adapta perfectamente a tus manos.',
            'activo'=>true,
            'fechaSubida' =>Carbon::now()->format('Y-m-d H:i'),
            'categoria_id'=>2,
            'usuario_id'=>3
        ]);

        Productousu::create([
            'titulo'=>'Se vende xbox one',
            'precio'=>200.99,
            'imagen'=> 'storage/market/xbox.jpg',
            'descripcion'=>'¡Hola! Estoy vendiendo mi Xbox One en excelente estado. La consola ha sido usada con mucho cuidado y funciona perfectamente. La vendo porque me estoy actualizando a una nueva consola.',
            'activo'=>true,
            'fechaSubida' =>Carbon::now()->format('Y-m-d H:i'),
            'categoria_id'=>2,
            'usuario_id'=>3
        ]);

        Productousu::create([
            'titulo'=>'Se vende switch',
            'precio'=>249.99,
            'imagen'=> 'storage/market/switch.jpg',
            'descripcion'=>'¡Hola! Estoy vendiendo mi Nintendo Switch que está en perfecto estado. La consola ha sido muy bien cuidada y funciona sin problemas. La vendo porque ya no tengo tiempo para jugar.',
            'activo'=>true,
            'fechaSubida' =>Carbon::now()->format('Y-m-d H:i'),
            'categoria_id'=>2,
            'usuario_id'=>3
        ]);

        Productousu::create([
            'titulo'=>'Se vende mando xbox',
            'precio'=>49.99,
            'imagen'=> 'storage/market/mandoX.jpg',
            'descripcion'=>'Estoy vendiendo un mando de xbox, el compañero perfecto para tus aventuras de gaming en la consola de próxima generación de Sony. Este mando ofrece una experiencia de juego inmersiva y cómoda, con tecnología innovadora y un diseño ergonómico que se adapta perfectamente a tus manos.',
            'activo'=>true,
            'fechaSubida' =>Carbon::now()->format('Y-m-d H:i'),
            'categoria_id'=>2,
            'usuario_id'=>3
        ]);
    }
}
