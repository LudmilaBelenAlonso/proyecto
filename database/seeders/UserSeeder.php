<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'id'=> 1,
                'name'=>'Iris',
                'email'=>'iris@irisnews.com',
                'password'=>\Hash::make('schnauzer'),
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
