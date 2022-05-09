<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TicketsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('tickets') ->insert([
            [
                'ticket_id' =>1,
                'nombre' => 'Platea',
                'precio' => 123144,
                'fecha' => '2022-09-09',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'ticket_id' =>2,
                'nombre' => 'Campo',
                'precio' => 323144,
                'fecha' => '2022-09-08',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'ticket_id' =>3,
                'nombre' => 'VIP',
                'precio' => 623144,
                'fecha' => '2022-09-10',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'ticket_id' =>4,
                'nombre' => 'VIP',
                'precio' => 423144,
                'fecha' => '2022-06-24',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'ticket_id' =>5,
                'nombre' => 'General',
                'precio' => 123144,
                'fecha' => '2022-06-25',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'ticket_id' =>6,
                'nombre' => 'VIP',
                'precio' => 0,
                'fecha' => '2022-10-19',
                'created_at' => now(),
                'updated_at' => now(),
            ],[
                'ticket_id' =>7,
                'nombre' => 'General',
                'precio' => 12312,
                'fecha' => '2022-11-18',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'ticket_id' =>8,
                'nombre' => 'Platea',
                'precio' => 123144,
                'fecha' => '2022-05-24',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'ticket_id' =>9,
                'nombre' => 'VIP',
                'precio' => 623144,
                'fecha' => '2022-05-23',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'ticket_id' =>10,
                'nombre' => 'General',
                'precio' => 123144,
                'fecha' => '2022-06-05',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'ticket_id' =>11,
                'nombre' => 'VIP',
                'precio' => 2323523,
                'fecha' => '2022-07-10',
                'created_at' => now(),
                'updated_at' => now(),
            ],

        ]);
    }
}
