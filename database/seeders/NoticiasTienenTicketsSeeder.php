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
                    'fecha' => '2022-09-09',
                    'precio' => '1233313',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],[
                    'noticia_id' => 1,
                    'ticket_id' => 2,
                    'fecha' => '2022-09-08',
                    'precio' => '2233313',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],[
                    'noticia_id' => 1,
                    'ticket_id' => 3,
                    'fecha' => '2022-09-11',
                    'precio' => '5233313',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],[
                    'noticia_id' => 2,
                    'ticket_id' => 3,
                    'fecha' => '2022-06-24',
                    'precio' => '133313',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],[
                    'noticia_id' => 2,
                    'ticket_id' => 4,
                    'fecha' => '2022-06-25',
                    'precio' => '13313',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],[
                    'noticia_id' => 5,
                    'ticket_id' => 4,
                    'fecha' => '2022-11-23',
                    'precio' => '13313',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
            ]);
    }
}
