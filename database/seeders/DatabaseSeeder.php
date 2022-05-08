<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       $this->call(LocalidadesSeeder::class);
       $this->call(GenerosSeeder::class);
       $this->call(NoticiasSeeder::class);
       $this->call(NoticiasTienenGenerosSeeder::class);
       $this->call(UserSeeder::class);
    }
}
