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
            'marcaModelo' => 'MSI Optix MAG321CQR 31.5" LED WQHD 144Hz FreeSync Curvo',
            'imagen'=> 'storage/imagenes/monitor1.png',
            'precio' => 486.18,
            'entrega' => 'Mañana',
            'descripcion' => 'Visualice su victoria con el monitor Gaming curvo MSI Optix MAG321CQR. El Optix MAG321CQR, equipado con un panel de tiempo de respuesta de 1 ms y 144 hz, le ofrece la ventaja competitiva que necesita para derribar a sus oponentes.',
            'caracteristicas' => 'Curved Gaming display (1800R) 
            Mystic Light
            WQHD High Resolution
            144Hz Ratio de Refresco
            Tiempo respuesta 1ms
            Gaming OSD App',
            'oferta' => false,
            'activo' => true,
            'categoria_id' => 3
        ]);

        Producto::create([
            'marcaModelo' => 'ASUS Dual GeForce RTX 4060 Ti EVO OC Edition 8GB GDDR6 DLSS3',
            'imagen'=> 'storage/imagenes/grafica1.png',
            'precio' => 567.44,
            'entrega' => 'Mañana',
            'descripcion' => 'Las GPU NVIDIA® GeForce RTX® serie 40 son más que rápidas para jugadores y creadores. Cuentan con la tecnología de la arquitectura ultra eficiente NVIDIA Ada Lovelace, que ofrece un salto espectacular tanto en rendimiento como en gráficos con tecnología de IA. Disfruta de mundos virtuales realistas con trazado de rayos y juegos con FPS ultra altos y la latencia más baja.',
            'caracteristicas' => 'Diseño de ventilador de tecnología axial. Dos ventiladores de tecnología Axial probados y verdaderos cuentan con un centro más pequeño que facilita hojas más largas y un anillo de barrera para aumentar la presión del aire hacia abajo.
            Placa trasera protectora. Una placa posterior ventilada funciona en conjunto con Axial-tech ventiladores para mantener bajos los niveles de ruido y GPU temperaturas bajo estricto control.',
            'oferta' => false,
            'activo' => true,
            'categoria_id' => 6
        ]);

        Producto::create([
            'marcaModelo' => 'MSI B450 Gaming Plus MAX',
            'imagen'=> 'storage/imagenes/placa1.png',
            'precio' => 87.99,
            'entrega' => 'De 2 a 3 dias',
            'descripcion' => 'Jugadores satisfechos con lo que realmente necesitan, B450 GAMING PLUS MAX está equipado con Core boost, Turbo M.2, DDR4 Boost, USB 3.2 Gen2 Connector',
            'caracteristicas' => 'Admite AMD Ryzen ? / Ryzen ? de 1.a, 2.a y 3.a generación con gráficos Radeon ? Vega y procesadores de escritorio AMD Ryzen ? de 2.a generación con gráficos Radeon ? / Athlon ? con Radeon ? Vega Graphics para Socket AM4
            Admite memoria DDR4, hasta 4133 (OC) MHz
            Experiencia de juego increíblemente rápida: TURBO M.2, AMD Turbo USB 3.2 GEN2, tecnología StoreMI
            Core Boost: con diseño premium y diseño de potencia totalmente digital para admitir más núcleos y proporcionar un mejor rendimiento',
            'oferta' => false,
            'activo' => true,
            'categoria_id' => 7
        ]);

        Producto::create([
            'marcaModelo' => 'Gigabyte Radeon RX 7600 XT GAMING OC 16GB GDDR6',
            'imagen'=> 'storage/imagenes/grafica2.png',
            'precio' => 379.99,
            'entrega' => 'Mañana',
            'descripcion' => 'Prepárate para los juegos de hoy y de mañana con 16 GB de memoria GDDR6 y tecnologías de próxima generación. Experimente un rendimiento, imágenes y fluidez increíbles al jugar y transmitir a 1080p y más con la tarjeta gráfica AMD Radeon™ RX 7600 XT, impulsada por la arquitectura AMD RDNA™ 3. Esté preparado para el futuro con aceleradores de IA, trazado de rayos y codificación de hardware AV1',
            'caracteristicas' => 'Procesamiento de gráficos Radeon™ RX 7600 XT
            Reloj de núcleo Por determinar
            Procesadores de flujo 2048
            Reloj de la memoria 18 Gbps
            Tamaño de la memoria 16 GB
            Tipo de memoria GDDR6
            Bus de memoria 128 bits
            Tarjeta de autobús PCI-E 4.0
            Resolución máxima digital 7680x4320
            Vista múltiple 4
            Tamaño de tarjeta Largo=281,4 Ancho=116,6 Alto=52,6 mm
            Formulario de PCB ATX',
            'oferta' => false,
            'activo' => true,
            'categoria_id' => 6
        ]);

        Producto::create([
            'marcaModelo' => 'Motorola Moto G73 5G 8/256GB Midnight Blue Libre',
            'imagen'=> 'storage/imagenes/movil1.png',
            'precio' => 169.49,
            'entrega' => 'De 1 a 2 semanas',
            'descripcion' => 'No dejes que nada te detenga con moto G73 5G. Disfruta de un rendimiento hasta un 30 % más rápido con el potente procesador MediaTek Dimensity 930. Cambia fácilmente entre tus aplicaciones con 8 GB de memoria y disfruta de una experiencia de juego sin interrupciones, vídeos sin retrasos y un mejor rendimiento de la cámara. También puedes descargar a la velocidad ultrarrápida del 5G sin preocuparte por la duración de la batería.',
            'caracteristicas' => 'Anima tus fotos: Tus fotos serán más luminosas gracias al sistema de cámara de 50 MP. La tecnología Ultra Pixel te ofrece píxeles 1,5 veces más grandes para fotos más nítidas y luminosas, tanto de día como de noche. Y con tres cámaras en una, podrás tomar fantásticas fotos de ultra gran angular, retratos de aspecto profesional y primeros planos increíblemente detallados.
            Versatilidad del objetivo: Siempre estarás listo con la cámara adecuada en cualquier luz o entorno.
            Píxeles de mayor tamaño = fotos más luminosas: La tecnología Ultra Pixel combina cuatro píxeles en uno para cuatro veces más sensibilidad a la luz.
            Acércate más: Observa los más mínimos detalles con el objetivo Macro Vision, que te acerca cuatro veces más al sujeto.
            La noche es tuya: Tus fotos nocturnas se renderizan con una claridad asombrosa cuando se combinan varios fotogramas en diferentes exposiciones.',
            'oferta' => false,
            'activo' => true,
            'categoria_id' => 1
        ]);


        Producto::create([
            'marcaModelo' => 'Motorola Edge 30 5G 8/128GB Meteor Grey Libre',
            'imagen'=> 'storage/imagenes/movil2.png',
            'precio' => 223.23,
            'entrega' => 'Mañana',
            'descripcion' => 'El Motorola edge 30 no solo es el smartphone 5G más fino del mercado, sino que está equipado con extraordinaria tecnología en su interior y diseñado para la comodidad de uso en su exterior. Su diseño llamativo y repelente al agua revela sutiles patrones al inclinarlo de lado a lado. Además, podrás acceder con un solo toque mediante el lector de huellas integrado en la pantalla.',
            'caracteristicas' => 'Nuestra cámara de 50 MP más avanzada. Captura imágenes de gran nitidez con cualquier luz. Primer plano, ultra gran angular o selfies asombrosos: motorola edge 30 siempre está listo para la foto perfecta.
            Céntrate en la creatividad. Lleva tus fotos al siguiente nivel gracias a las innovadoras características del software de la cámara y graba vídeos que muestren tu verdadero estilo.
            Imágenes impresionantes, sonido envolvente. Negros más oscuros, contrastes más nítidos y colores realistas, todo mejorado por el sonido multidimensional del audio Dolby Atmos®.
            Rápido y fluido. Los vídeos y juegos se ven increíblemente bien en la pantalla OLED de 6,5”. Gracias a la rápida frecuencia de actualización de 144 Hz, desplazarse y jugar nunca fue tan fluido.',
            'oferta' => false,
            'activo' => true,
            'categoria_id' => 1
        ]);

        Producto::create([
            'marcaModelo' => 'Tablet Samsung Galaxy Tab S9 Ultra 5G 12/512GB Gris + Cargador 25W',
            'imagen'=> 'storage/imagenes/tablet1.png',
            'precio' => 1309.15,
            'entrega' => 'Mañana',
            'descripcion' => 'Imagina tener en tus manos la máxima potencia, alto rendimiento y gran calidad de imagen y sonido propias de un ordenador portátil de última generación, pero con mucha más autonomía y facilidad de transporte. Samsung Galaxy Tab S9 Ultra ofrece todo eso y más. Con un diseño único y compacto, fabricada con materiales de gran resistencia y sostenibles para el medio ambiente, es la Galaxy Tab más grande hasta la fecha.',
            'caracteristicas' => 'Un potentísimo procesador creado especialmente para Galaxy. Galaxy Tab S9 Ultra incorpora un avanzado procesador Octa-Core Qualcomm Snapdragon 8 Gen 2 for Galaxy, el más potente disponible hasta la fecha en una tablet Android. No esperes para poner a prueba su increíble chip, capaz de ofrecer un 34% más de potencia y un 41% de mejora en GPU.  
            Si tú no vas al cine, el cine viene a ti. Tener una Galaxy Tab S9 Ultra en tus manos es llevar siempre un cine encima. Empieza a disfrutar de imágenes sorprendentes en su pantalla HDR10+ y de un sonido Dolby Atmos sin igual con sus altavoces AKG, un 20% más grandes que los del modelo previo. ¿EL resultado? Tu tablet te transporta al centro de la acción en cada escena para que no vuelvas a echar de menos las salas de cine. 
            La Galaxy Tab con mayor autonomía hasta la fecha. No vuelvas a preocuparte por quedarte sin carga: Galaxy Tab S9 Ultra incorpora una batería de gran capacidad de 11.200 mAh que te permite utilizarla durante hasta 15 horas sin interrupciones. Además, si te ves en apuros, podrás transferir carga de tu Galaxy Tab S9 Ultra a tu smartphone Galaxy o viceversa en caso de emergencia. ',
            'oferta' => false,
            'activo' => true,
            'categoria_id' => 4
        ]);

        Producto::create([
            'marcaModelo' => 'Apple iPad Pro 2022 12.9" WiFi+Cellular 2TB Gris Espacial',
            'imagen'=> 'storage/imagenes/tablet2.png',
            'precio' => 2819.69,
            'entrega' => 'Mañana',
            'descripcion' => 'Rendimiento de escándalo. Pantallas al límite de la técnica. Conexiones inalámbricas de vértigo. Nuevas posibilidades con el Apple Pencil. Y todas las prestaciones de iPadOS 16. Di hola a la experiencia iPad definitiva.',
            'caracteristicas' => 'Chip M2. El rendimiento de una nueva generación. El M2 lleva los chips de Apple al hiperespacio. Su CPU de 8 núcleos ofrece un rendimiento hasta un 15 % más rápido mientras su GPU de 10 núcleos acelera los gráficos hasta un 35 %. El rendimiento del iPad Pro alcanza cotas nunca vistas gracias a un ancho de banda un 50 % mayor y a un Neural Engine un 40 % más veloz, para que las tareas de aprendizaje automático vayan como un cohete. Podrás crear diseños 3D ultrarrealistas o modelos de realidad aumentada complejos, jugar con gráficos con calidad de consola a una frecuencia de fotogramas descomunal y mil cosas más. Todo sin tener que preguntar si hay algún enchufe en la sala.
            Un estudio completo de cine en tus manos. El motor multimedia de alto rendimiento del chip M2 acelera la codificación y decodificación en formato ProRes. Tanto, que se triplica la velocidad al pasar proyectos de vídeo a este formato. De hecho, con el procesador de señal de imagen del M2 y las cámaras avanzadas del iPad Pro, ahora puedes grabar directamente en ProRes. Afina el oído, que aún hay más: los cinco micrófonos de estudio y los cuatro altavoces compatibles con Dolby Atmos graban y reproducen un sonido digno del séptimo arte.',
            'oferta' => false,
            'activo' => true,
            'categoria_id' => 4
        ]);

        Producto::create([
            'marcaModelo' => 'AMD Ryzen 7 7800X3D 4.2 GHz/5 GHz',
            'imagen'=> 'storage/imagenes/cpu1.png',
            'precio' => 401.99,
            'entrega' => 'Mañana',
            'descripcion' => 'El procesador para juegos que domina el mundo de la mano de la tecnología AMD 3D V-Cache™, para ganar aún más rendimiento de juego. Sin importar la configuración ni la resolución que uses, lleva a tu equipo a la victoria con este maravilloso procesador para juegos. Disfruta, además, las ventajas de AMD 3D V-Cache™, la tecnología de punta que es sinónimo de latencia baja y mucho rendimiento de juego.',
            'caracteristicas' => 'Fabricante de procesador: AMD
            Modelo del procesador: 7800X3D
            Frecuencia base del procesador: 4,2 GHz
            Familia de procesador: AMD Ryzen™ 7
            Número de núcleos de procesador: 8
            Socket de procesador: Zócalo AM5
            Litografía del procesador: 5 nm
            Número de hilos de ejecución: 16',
            'oferta' => false,
            'activo' => true,
            'categoria_id' => 5
        ]);

        Producto::create([
            'marcaModelo' => 'Portátil Acer Aspire 3 A315-44P AMD Ryzen 7 5700U/16GB/512GB SSD/15.6"',
            'imagen'=> 'storage/imagenes/portatil1.png',
            'precio' => 479.47,
            'entrega' => 'Mañana',
            'descripcion' => 'Este elegante portátil Acer Aspire 3 A315 esconde un potente procesador AMD Ryzen 7 y gráficos AMD Radeon™ integrados para hacer el la mayor parte de su gran relación pantalla-cuerpo. Como es de esperar de una computadora portátil de este calibre, también incluye conectividad Wi-Fi súper rápida y mucho espacio de almacenamiento y memoria.',
            'caracteristicas' => 'Potente productividad: El Aspire 5 incluye mucha potencia en su chasis, con un procesador AMD y gráficos AMD Radeon™. Con una rápida memoria DDR4, ofrece toda la potencia que necesitas para tus necesidades multitarea.
            Mucho espacio: tendrás mucha potencia y almacenamiento para tus tareas, con una SSD PCIe M.2 de carga rápida.
            Visualmente impresionante: gracias al diseño de bisel delgado y una relación cuerpo-pantalla del 81,61 %, puedes disfrutar de su panel IPS Full HD con colores intensos. Para mejorar aún más la apariencia visual y proteger sus ojos, incluya la tecnología Acer Color Intelligence™.
            Comunicación rápida: los usuarios obtendrán actualizaciones sencillas sobre la información más reciente con una gama completa de opciones de conectividad. Wi-Fi 6 de doble banda (802.11ax) mejora el rendimiento promedio de la red hasta 3 veces y reduce la latencia hasta en un 75 % en comparación con Wi-Fi 5 (802.11ac).',
            'oferta' => false,
            'activo' => true,
            'categoria_id' => 2
        ]);

        Producto::create([
            'marcaModelo' => 'Alurin Flex Advance Intel Core i7-1255U/16GB/1TB SSD/15.6"',
            'imagen'=> 'storage/imagenes/portatil2.png',
            'precio' => 690.47,
            'entrega' => 'Mañana',
            'descripcion' => '¿Estás buscando un portátil rápido y eficiente que puedas llevar contigo a cualquier parte? Nuestro Alurin Flex Advance i7 es la elección perfecta para ti. Con una potencia de procesamiento rápida y eficiente, podrás realizar tus tareas diarias con facilidad y sin retrasos. Además, su pantalla de alta definición te permitirá disfrutar de tus películas, series y videos favoritos con una calidad de imagen excepcional. Ya sea que estés trabajando desde casa o necesites un portátil para llevar contigo a la universidad o al trabajo, este portátil es la elección ideal. ¡No esperes más y adquiérelo hoy mismo!',
            'caracteristicas' => 'Rendimiento superior: El procesador Intel® Core™ i7-1255U ofrece una potencia y eficiencia excepcionales. Podrás trabajar de manera eficiente, realizar multitareas y disfrutar de una experiencia de navegación fluida. El Alurin Flex Advance i7 una excelente opción para aquellos que buscan un rendimiento superior en su portátil, una eficiencia energética mejorada, compatibilidad con aplicaciones de última generación y una excelente relación calidad-precio.
            Detalles Realistas: Su pantalla de 15.6" FHD IPS ofrece una calidad de imagen excepcional. Cada detalle se verá nítido y claro, lo que hace que la experiencia de ver películas, series o trabajar en diseño gráfico sea mucho más agradable y precisa. Además, la tecnología IPS ofrece una amplia gama de colores, lo que significa que los colores se verán más vivos y vibrantes y permite un ángulo de visión amplio, lo que significa que puedes disfrutar de una imagen nítida y detallada desde cualquier ángulo sin perder calidad.',
            'oferta' => false,
            'activo' => true,
            'categoria_id' => 2
        ]);

        Producto::create([
            'marcaModelo' => 'MSI Modern 15 B13M-282XES Intel Core i7-1355U/16GB/512GB SSD/15.6"',
            'imagen'=> 'storage/imagenes/portatil3.png',
            'precio' => 749.27,
            'entrega' => 'Mañana',
            'descripcion' => '¡Ilumina tu vida con la nueva Serie Modern! Delgado, potente y elegante: el Modern 15 B13M está repleto de todo lo que necesita para perseguir sus pasiones tanto en el trabajo como en el juego. ¡Deje que su increíble rendimiento lo ayude a conquistar cualquier tarea y agregue más estilo a su productividad diaria!',
            'caracteristicas' => 'Colorea tus vibraciones: Classic Black con su encanto misterioso y Star Blue como caminar bajo el cielo estrellado. Sea cual sea tu estilo, la Serie Modern tiene un color que se adapta a ti.
            Potencie la productividad diaria: Con hasta el último procesador Intel® Core™ i7 de 13.ª generación, la serie Modern supera los límites de un mayor rendimiento. Ya sea que esté trabajando o jugando en varias tareas, el Modern 15 B13M con gráficos hasta Intel® Iris® Xe potencia la productividad diaria para ayudarlo a hacer las cosas en cualquier lugar y en cualquier momento.
            El Modern 15 B13M con su panel táctil ampliado, control táctil suave y receptivo le permite maximizar su productividad mientras viaja. La función de 180° lay-flat y Flip-n-Share le permite compartir su pantalla con un solo clic para un espacio de trabajo más efectivo. El recorrido optimizado de la tecla de 1,5 mm ofrece una experiencia de escritura más ergonómica. Gracias a un teclado retroiluminado de tamaño completo, también puede trabajar en entornos oscuros.',
            'oferta' => false,
            'activo' => true,
            'categoria_id' => 2
        ]);
    }
}
