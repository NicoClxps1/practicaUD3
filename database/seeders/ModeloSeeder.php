<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ModeloSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('modelos')->insert([
            ['nombre' => 'YZF-R1', 'descripcion' => 'Moto deportiva de Yamaha', 'cilindrada' => '1000cc', 'tipo_motor' => '4 tiempos'],
            ['nombre' => 'CBR600RR', 'descripcion' => 'Moto deportiva de Honda', 'cilindrada' => '600cc', 'tipo_motor' => '4 tiempos'],
            ['nombre' => 'Ducati Panigale V4', 'descripcion' => 'Moto de alto rendimiento', 'cilindrada' => '1100cc', 'tipo_motor' => '4 tiempos'],
        ]);
    }
}
