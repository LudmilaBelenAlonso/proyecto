<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NoticiasTienenGenerosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('noticias_tienen_generos')->insert([
            [
                'noticia_id' => 1,
                'genero_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'noticia_id' => 1,
                'genero_id' => 4,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'noticia_id' => 2,
                'genero_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'noticia_id' => 3,
                'genero_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'noticia_id' => 3,
                'genero_id' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'noticia_id' => 4,
                'genero_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'noticia_id' => 5,
                'genero_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'noticia_id' => 5,
                'genero_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
