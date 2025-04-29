<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Permiso;
use App\Models\Propiedad;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $this->call([
            CargoEmpleadoSeeder::class,
            RolSeeder::class,
            PermisoSeeder::class,
            RolPermisoSeeder::class,
            UserSeeder::class,
            PropiedadSeeder::class,
            ResidenteSeeder::class,
            EmpleadoSeeder::class,

        ]);
    }
}
