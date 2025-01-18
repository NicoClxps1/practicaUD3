<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MotoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('motos')->insert([
            ['marca' => 'Yamaha', 'modelo' => 'YZF-R1', 'precio' => 20000, 'modelo_id' => 1],
            ['marca' => 'Honda', 'modelo' => 'CBR600RR', 'precio' => 15000, 'modelo_id' => 2],
            ['marca' => 'Ducati', 'modelo' => 'Panigale V4', 'precio' => 25000, 'modelo_id' => 3],
        ]);
    }
}
