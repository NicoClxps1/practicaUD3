<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('clientes')->insert([
            ['nombre' => 'Juan', 'apellido' => 'Pérez', 'email' => 'juan.perez@example.com', 'telefono' => '123456789', 'direccion' => 'Calle Falsa 123'],
            ['nombre' => 'Ana', 'apellido' => 'García', 'email' => 'ana.garcia@example.com', 'telefono' => '987654321', 'direccion' => 'Avenida Siempre Viva 456'],
            ['nombre' => 'Luis', 'apellido' => 'Martínez', 'email' => 'luis.martinez@example.com', 'telefono' => '555555555', 'direccion' => 'Calle Real 789'],
        ]);
    }
}
