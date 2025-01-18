<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Si quieres mantener el usuario por defecto, usa una solución única o coméntalo.
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call([
            ModeloSeeder::class,
            MotoSeeder::class,
            ClienteSeeder::class,
            VentaSeeder::class,
        ]);
    }
}
