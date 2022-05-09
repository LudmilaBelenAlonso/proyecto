<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NoticiasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table ('noticias')->insert([
            [
                'noticia_id' =>1,
                'localidad_id' =>3,
                'titulo' => 'Rock in Rio 2022',
                'copete' => 'La octava edición del Rock in Río en Río de Janeiro estaba prevista inicialmente para septiembre y octubre de 2021, pero la pandemia de la covid-19, que ha castigado duramente a Brasil, obligó a los organizadores a aplazarla un año.',
                'desarrollo' => 'Rock in Rio abre sus puertas para recibir durante dos fines de semana a artistas de todo el mundo. La organización confirmó las cabezas de cartel del festival quienes se estarán presentando los 2, 3, 4, 8, 9, 10 y 11 de septiembre. En el escenario Mundo do Festival se presentarán Iron Maiden, Post Malone, Justin Bieber, Guns n’ Roses, Green Day, The Offspring, Coldplay y Dua Lipa. Por su parte en el escenario Sunset están confirmados: Bullet For My Valentine, Living Color, Racionais, Corinne Bailey Rae, Joss Stone, Avril Lavigne, CeeLo Green, Macy Grey, entre otros.',
                'fecha_evento' => '09-2022',
                'poster' => '',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'noticia_id' =>2,
                'localidad_id' =>1,
                'titulo' => 'Bye bye',
                'copete' => 'Babasónicos llega al Movistar Arena para brindar un show esperado y controversial.',
                'desarrollo' => 'Lejos de decir adiós, la banda se presenta en este escenario interpretando su último single: Bye Bye. Es como una “fantasía bailable impregnada de sexualidad donde el placer de lo efímero se vuelve refugio temporal de un mundo apocalíptico paradójicamente perdido a merced de lo superficial”.',
                'fecha_evento' => '06-2022',
                'poster' => '',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'noticia_id' =>3,
                'localidad_id' =>2,
                'titulo' => 'Firenze Rock',
                'copete' => 'Firenze Rocks vuelve luego de la pandemia ocasionada por la covid-19',
                'desarrollo' => "Firenze Rocks es un festival de rock y pop en la histórica ciudad de Florencia, en el norte de Italia. Ubicado en el impresionante Visarno Arena a las afueras del centro de la ciudad, el festival ha reunido en masa a leyendas del rock como Guns N' Roses, Foo Fighters, Iron Maiden, The Cure, Tool y Aerosmith en los últimos años. La entrega de 2022 continúa la impresionante racha del festival de atraer a los nombres más prestigiosos de la música rock a Florencia, con Metallica, Red Hot Chili Peppers, Green Day y Muse como cabezas de cartel.",
                'fecha_evento' => '06-2022',
                'poster' => '',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'noticia_id' =>4,
                'localidad_id' =>4,
                'titulo' => 'Comic Con',
                'copete' => 'LA ESPERA FUE LARGA PERO AL FIN NOS VOLVEMOS A ENCONTRAR DE FORMA PRESENCIAL.',
                'desarrollo' => 'Comic Con (Comic Convention) es la definición de un género de convención o tipo de evento dedicado a la cultura pop, el cual actualmente se viene celebrando en diferentes partes del mundo. Es originario de Estados Unidos en donde se realiza hace más de 50 años, y cuenta con la participación y presencia de todos los estudios de cine y TV, videojuegos y editoriales. En Argentina se viene realizando de forma oficial desde el año 2013 y actualmente se trata de la Comic-Con en habla hispana más grande del mundo, siendo además, una plataforma de anuncios y presentación para la industria del cine, TV, videojuegos y música.',
                'fecha_evento' => '05-2022',
                'poster' => '',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'noticia_id' =>5,
                'localidad_id' =>1,
                'titulo' => 'Nerdearla',
                'copete' => 'Uno de los eventos de TI más importantes del mundo. Este año vuelve en su versión híbrida.',
                'desarrollo' => 'Conocido como el encuentro de nerds para nerds, nerdear.la contará con más de 60 charlas técnicas, junto a diez encuentros sobre divulgación científica y doce talleres y actividades lúdicas para los entusiastas y aficionados a la ciencia y tecnología. Entre las actividades destacadas está Javascript 101, un taller orientado para los interesados en iniciar sus primeros pasos en la programación mediante el uso de este lenguaje. También habrá un espacio para analizar la transformación digital en los servicios financieros y bancarios, además del debate sobre la seguridad informática y el impacto de las vulnerabilidades en las aplicaciones web.',
                'fecha_evento' => '10-2022',
                'poster' => '',
                'created_at' => now(),
                'updated_at' => now(),
            ],
           [
                'noticia_id' =>6,
                'localidad_id' =>1,
                'titulo' => 'Primavera Sound',
                'copete' => 'Llega Primavera Sound Buenos Aires.',
                'desarrollo' => 'Por su parte, el ansiado anuncio del lineup de Primavera Sound Buenos Aires respetará el mismo compromiso con el público, el cual se ha convertido en una de las marcas identitarias del evento a lo largo de su historial: un cartel igualitario que refleja toda la paleta de colores de la música contemporánea, uniendo leyendas de la música con los y las artistas del momento, a referentes con discípulos, experimentación electrónica con canciones de autor, artistas intergeneracionales con voces que capturan su tiempo. ',
                'fecha_evento' => '11-2022',
                'poster' => '',
                'created_at' => now(),
                'updated_at' => now(),
            ],
           [
                'noticia_id' =>7,
                'localidad_id' =>2,
                'titulo' => 'Time Warp',
                'copete' => 'Time Warp regresa para la cuarta edición del satélite brasileño de la icónica marca, combinando las imágenes, los sonidos y el house y el techno puros que han sido parte del ADN de Time Warp desde 1994.',
                'desarrollo' => 'El festival llenará el Anhembi Sambadromo durante dos días con una experiencia que combina música, baile y tecnología, todo con el clásico diseño de salas de Time Warp y la siempre impecable calidad de los sistemas de sonido que acompañan a algunos de los grandes nombres del panorama house y techno.',
                'fecha_evento' => '05-2022',
                'poster' => '',
                'created_at' => now(),
                'updated_at' => now(),
            ],
           [
                'noticia_id' =>8,
                'localidad_id' =>5,
                'titulo' => 'I-Days Milano 2022',
                'copete' => "I-Days asegura que Milán no se pierda la realeza del rock con Aerosmith, Foo Fighters, Imagine Dragons y más rumbo a la 'bella Italia' en 2022.",
                'desarrollo' => 'Una serie de conciertos que fusiona himnos de rock para cantar juntos con calor abrasador y celebraciones bañadas por el sol, hay una razón válida por la cual 80,000 asistentes al festival han regresado constantemente a I-Days durante casi veinte años consecutivos.',
                'fecha_evento' => '06-2022',
                'poster' => '',
                'created_at' => now(),
                'updated_at' => now(),
            ],
           [
                'noticia_id' =>9,
                'localidad_id' =>6,
                'titulo' => 'NOS Alive  2022',
                'copete' => "NOS Alive es un festival portugués de música indie y alternativa, que se celebra cada verano a las afueras de Lisboa.",
                'desarrollo' => 'NOS Alive, actualmente uno de los festivales más grandes y populares de Portugal, lleva reuniendo carteles innovadores desde 2007, mezclando grandes figuras de todos los tiempos con nuevos talentos en una de las ciudades con más ambiente de Europa.',
                'fecha_evento' => '07-2022',
                'poster' => '',
                'created_at' => now(),
                'updated_at' => now(),
            ],

        ]);
    }
}
