<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NoticiasTienenTicketsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('noticias_tienen_tickets')->insert([
                [
                    'noticia_id' => 1,
                    'ticket_id' => 1,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],[
                    'noticia_id' => 1,
                    'ticket_id' => 2,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],[
                    'noticia_id' => 1,
                    'ticket_id' => 3,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],[
                    'noticia_id' => 2,
                    'ticket_id' => 3,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],[
                    'noticia_id' => 2,
                    'ticket_id' => 4,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],[
                    'noticia_id' => 5,
                    'ticket_id' => 4,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
            ]);
    }
}
