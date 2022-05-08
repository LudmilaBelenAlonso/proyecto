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
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'ticket_id' =>2,
                'nombre' => 'Campo',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'ticket_id' =>3,
                'nombre' => 'VIP',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'ticket_id' =>4,
                'nombre' => 'General',
                'created_at' => now(),
                'updated_at' => now(),
            ],

        ]);
    }
}
