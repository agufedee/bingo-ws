<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DrawNumberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $numbers = [];
        //Generar registros del 00 al 99
        for ($i = 0; $i < 100; $i++) {
            $numbers[] = [
                'number' => $i,
                'is_drawn' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }
        //Query Builder para insertar registros masivos de manera rapida
        DB::table('draw_numbers')->insert($numbers);
    }
}
