<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VentaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('ventas')->insert([
            ['cliente_id' => 1, 'moto_id' => 1, 'total' => 20000, 'fecha_venta' => '2025-01-01'],
            ['cliente_id' => 2, 'moto_id' => 2, 'total' => 15000, 'fecha_venta' => '2025-01-02'],
            ['cliente_id' => 3, 'moto_id' => 3, 'total' => 25000, 'fecha_venta' => '2025-01-03'],
        ]);
    }
}
