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
                'desarrollo' => 'Rock in Rio abre sus puertas para recibir durante dos fines de semana a artistas de todo el mundo. La organización confirmó las cabezas de cartel del festival quienes se estarán presentando los 2, 3, 4, 8, 9, 10 y 11 de septiembre.
En el escenario Mundo do Festival se presentarán Iron Maiden, Post Malone, Justin Bieber, Guns n’ Roses, Green Day, The Offspring, Coldplay y Dua Lipa. Por su parte en el escenario Sunset están confirmados: Bullet For My Valentine, Living Color, Racionais, Corinne Bailey Rae, Joss Stone, Avril Lavigne, CeeLo Green, Macy Grey, entre otros.',
                'fecha_evento' => '09-2022',
                'poster' => '',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'noticia_id' =>2,
                'localidad_id' =>3,
                'titulo' => 'Bye bye',
                'copete' => 'Gira de Babasonicos con su último disco',
                'desarrollo' => 'Gira de Babasonicos con su último disco',
                'fecha_evento' => '06-2022',
                'poster' => '',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'noticia_id' =>3,
                'localidad_id' =>2,
                'titulo' => 'Firenze Rock',
                'copete' => 'Festival de rock que vuelve a Italia luego de la pandemia ocasionada por el SARSCOV-2',
                'desarrollo' => 'Festival de rock que vuelve a Italia luego de la pandemia ocasionada por el SARSCOV-2',
                'fecha_evento' => '06-2022',
                'poster' => '',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'noticia_id' =>4,
                'localidad_id' =>4,
                'titulo' => 'Comic Con',
                'copete' => 'Evento dedicado a comics y cultura pop',
                'desarrollo' => 'Evento dedicado a comics y cultura pop',
                'fecha_evento' => '05-2022',
                'poster' => '',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'noticia_id' =>5,
                'localidad_id' =>1,
                'titulo' => 'Nerdearla',
                'copete' => 'Evento dedicado a personas que les gusta todo lo relacionado con el mundo tecnologico y desean conocer los ultimos avances',
                'desarrollo' => 'Evento dedicado a personas que les gusta todo lo relacionado con el mundo tecnologico y desean conocer los ultimos avances',
                'fecha_evento' => '10-2022',
                'poster' => '',
                'created_at' => now(),
                'updated_at' => now(),
            ],

        ]);
    }
}
