<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LocalidadesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('localidades')->insert([
            [
                'localidad_id' => 1,
                'nombre' => 'Buenos Aires',
                'pais' => 'Argentina',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'localidad_id' => 2,
                'nombre' => 'Florencia',
                'pais' => 'Italia',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'localidad_id' => 3,
                'nombre' => 'Rio de Janeiro',
                'pais' => 'Brasil',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'localidad_id' => 4,
                'nombre' => 'San Martin',
                'pais' => 'Argentina',
                'created_at' => now(),
                'updated_at' => now(),
            ],
    ]);
    }
}
