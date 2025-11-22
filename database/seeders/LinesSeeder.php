<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LinesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Crear líneas iniciales(sin numeros, estos se asignan con logica)
        DB::table('lines')->insert([
            ['name' => 'Línea 1', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Línea 2', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Línea 3', 'created_at' => now(), 'updated_at' => now()],
        ]);
        
    }
}
