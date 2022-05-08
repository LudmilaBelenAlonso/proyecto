<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GenerosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('generos') ->insert([
            [
                'genero_id' =>1,
                'nombre' => 'Recital',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'genero_id' => 2,
                'nombre' => 'Comics',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'genero_id' => 3,
                'nombre' => 'Tecnologia',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'genero_id' => 4,
                'nombre' => 'Festival',
                'created_at' => now(),
                'updated_at' => now(),
            ],

        ]);
    }
}
